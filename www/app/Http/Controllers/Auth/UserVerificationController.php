<?php

namespace Creativolab\App\Http\Controllers\Auth;

use Creativolab\App\Http\Controllers\Controller;
use Creativolab\App\Http\Response;
use Creativolab\App\Repositories\User\UserRepository;

class UserVerificationController extends Controller
{
    public function verify(string $token)
    {
        $userRepository = new UserRepository();
        $user = $userRepository->getUserByVerificationToken($token);
        $response = new Response();
        if (!empty($user) && $user->getId() > 0) {
            if (!$user->isVerified()) {
                $userRepository->verifyUser($token);
            }
            $response->render('auth/user_verified');
        } else {
            $response->render('errors/404');
            http_response_code(404);
        }
    }
}
<?php

namespace Creativolab\App\Http\Controllers\Auth;

use Creativolab\App\Http\Controllers\Controller;
use Creativolab\App\Http\Response;
use Creativolab\App\Repositories\User\UserRepository;

class UserVerificationController extends Controller
{
    public function verify($token)
    {
        $userRepository = new UserRepository();
        $user = $userRepository->getUserByToken($token);
        $response = new Response();
        if ($user->isVerified() === 0) {
            $userRepository->verify($token);
            $response->render('auth/user_verified');
        } else if ($user->isVerified() === 1){
            $response->render('auth/user_verified');
        } else {
            $response->render('errors/404');
            http_response_code(404);
        }
    }
}
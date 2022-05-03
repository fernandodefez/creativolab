<?php

namespace Creativolab\App\Http\Controllers\Auth;

use Creativolab\App\Http\Controllers\Controller;
use Creativolab\App\Http\Response;
use Creativolab\App\Repositories\User\UserRepository;

class AccountVerificationController extends Controller
{
    public function verify($token)
    {
        $userRepository = new UserRepository();
        $user = $userRepository->getUserByToken($token);
        if ($user->isVerified() === 0) {
            // TODO: Verificar usuario con el m´etodo verify
            echo "verificar";
        } else if ($user->isVerified() === 1){
            echo "ya está verificado";
        } else {
            $response = new Response();
            $response->render('errors/404');
            http_response_code(404);
            echo "token no existente";
        }
    }
}
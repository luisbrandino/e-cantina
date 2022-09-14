<?php

namespace App\Http\Controllers;

use App\Repositories\AuthRepository;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function __construct(AuthRepository $repository)
    {
        $this->_repository = $repository;
    }

    public function auth(Request $request, string $provider) {
        if (!$token = $request->input('access_token'))
            return redirect('/');

        $this->_repository->authenticate($provider, $token);

        return redirect('/');
    }

    public function logout() {
        $this->_repository->logout();

        return redirect('/');
    }
}

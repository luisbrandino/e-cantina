<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminLoginRequest;
use App\Repositories\AdminRepository;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    function __construct(AdminRepository $repository) {
        $this->_repository = $repository;
    }

    public function dashboard() {
        //$contents = $this->_repository->getContents();
        return view('admin.dashboard');
    }

    public function getLoginPage() {
        return view('admin.login');
    }

    public function auth(AdminLoginRequest $request) {
        if ($this->_repository->auth($request->validated())) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('admin.login');
    }

}

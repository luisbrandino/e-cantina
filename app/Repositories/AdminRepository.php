<?php

namespace App\Repositories;

use App\Models\AdminUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminRepository {

    function __construct(ProductRepository $productRepository)
    {
        $this->_productRepository = $productRepository;
    }


    public function getContents()
    {
        $contents = [];

        $contents['products'] = $this->_productRepository->getProducts();

        return $contents;
    }

    public function auth($fields)
    {
        $email = $fields['email'];
        $password = $fields['password'];

        $user = AdminUser::where(['email' => $email])->first();

        if (Hash::check($password, $user->password)) {
            session()->put('admin', true);
            return true;
        } else {
            session()->flash('error', 'E-mail ou senha inválidos.');
            return false;
        }


    }

}

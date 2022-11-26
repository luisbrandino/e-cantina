<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Auth;
use App\Repositories\ProductRepository;
use App\Repositories\CartRepository;

class MenuRepository {

    public function __construct(ProductRepository $productRepository, CartRepository $cartRepository)
    {
        $this->_productRepository = $productRepository;
        $this->_cartRepository = $cartRepository;
    }

    public function getContents() {
        $contents = [];

        $contents['products'] = $this->_productRepository->getProductsOnMenu();

        if (Auth::check())
            $contents['cart'] = $this->_cartRepository->getItems();

        return $contents;
    }

}

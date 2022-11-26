<?php

namespace App\Repositories;

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
        $contents['cart'] = $this->_cartRepository->getItems();

        return $contents;
    }

}

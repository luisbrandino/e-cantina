<?php

namespace App\Repositories;

use App\Repositories\ProductRepository;

class MenuRepository {

    public function __construct(ProductRepository $productRepository)
    {
        $this->_productRepository = $productRepository;
    }

    public function getContents() {
        $contents = [];

        $contents['products'] = $this->_productRepository->getProductsOnMenu();

        return $contents;
    }

}

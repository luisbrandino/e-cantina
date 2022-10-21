<?php 

namespace App\Repositories;

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

}
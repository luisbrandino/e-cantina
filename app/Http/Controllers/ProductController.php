<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductEditRequest;
use App\Models\Product;
use App\Repositories\ProductRepository;
use App\Services\ImageService;

class ProductController extends Controller
{
    
    function __construct(ProductRepository $repository)
    {
        $this->_repository = $repository;
    }

    public function create(ProductCreateRequest $request) {
        return $this->_repository->create($request->validated());
    }

    public function get() {
        return $this->_repository->getProducts();
    }

    public function edit(ProductEditRequest $request, Product $product) {
        return $this->_repository->edit($product, $request->validated());
    }


}

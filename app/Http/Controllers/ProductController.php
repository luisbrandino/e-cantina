<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreateRequest;
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


}

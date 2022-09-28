<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartAddRequest;
use App\Http\Requests\CartRemoveRequest;
use App\Http\Requests\CartUpdateRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Repositories\CartRepository;

class CartController extends Controller
{

    public function __construct(CartRepository $repository)
    {
        $this->_repository = $repository;
    }
    
    public function add(CartAddRequest $request, Product $product) {
        if ($this->_repository->add($product)) {
            // success
           // return;
        }

        //dump($this->_repository->getItems());

        // failure
        return;
    }

    public function remove(CartRemoveRequest $request, Product $product) {
        if ($this->_repository->remove($product)) {
            // success
            return;
        }

        // failure
        return;
    }

    public function update(CartUpdateRequest $request) {

    }


}

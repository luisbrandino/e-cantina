<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartAddRequest;
use App\Http\Requests\CartRemoveRequest;
use App\Http\Requests\CartUpdateRequest;
use App\Models\Product;
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
            return true;
        }

        //dump($this->_repository->getItems());

        // failure
        return false;
    }

    public function update(CartUpdateRequest $request, Product $product) {
        $quantity = $request->input('quantity');

        if ($this->_repository->update($product, ['quantity' => $quantity])) {
            return true;
        }

        return false;
    }

    public function remove(CartRemoveRequest $request, Product $product) {
        if ($this->_repository->remove($product)) {
            // success
            return true;
        }

        // failure
        return false;
    }

}

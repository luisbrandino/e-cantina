<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartRepository {

    public function add(Product $product, int $quantity = 1) {
        if ($this->_has($product)) {
            $this->update($product, ['quantity' => 1]);

            return true;
        }
        
        $cart = $this->_getCart();
        
        $cart->add([
            'id' => uniqid(),
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $quantity,
            'attributes' => [],
            'associatedModel' => $product
        ]);

        return true;
    }

    public function remove(Product $product) {
        $row = $this->_findRowByProduct($product);

        if (is_null($row))
            return;
        
        $this->_getCart()->remove($row->id);

        return true;
    }

    public function update(Product $product, $attributes) {
        if (!is_array($attributes))
            return 'n é array';

        $row = $this->_findRowByProduct($product);

        if (is_null($row))
            return 'n tem row';

        if ($row->quantity + $attributes['quantity'] > 10)
            return 'ja foi quantidaade';

        $this->_getCart()->update($row->id, $attributes);

        return true;
    }

    public function getItems() {
        $content = $this->_getCart()->getContent();

        $items = [];

        foreach($content as $item) {
            $items[] = $item;
        }

        //$this->_iterate($content, function ($item) {
        //    $items[] = $item;
        //});

        return $items;
    }

    public function isEmpty() {
        return $this->_getCart()->isEmpty();
    }

    public function clear() {
        return $this->_getCart()->clear();
    }

    public function getTotal() {
        return $this->_getCart()->getTotal();
    }

    public function getSubTotal() {
        return $this->_getCart()->getSubTotal();
    }

    private function _has(Product $product) {
        $items = $this->getItems();

        foreach($items as $item) {
            if ($item->associatedModel->id == $product->id)
                return true;
        }

        return false;
    }

    private function _findRowByProduct(Product $product) {
        $items = $this->getItems();

        $row = null;

        foreach($items as $item) {
            if ($item->associatedModel->id == $product->id) {
                $row = $item;
                break;
            }
        }

        return $row;
    }

    private function _iterate($collection, $fn) {
        foreach($collection as $item) {
            $fn($item);
        }
    }

    private function _getCart() {
        return \Cart::session(Auth::user()->microsoft_id);
    }

}
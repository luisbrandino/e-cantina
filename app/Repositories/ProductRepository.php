<?php 

namespace App\Repositories;

use App\Models\Product;

class ProductRepository {

    public function getProductsOnMenu() {
        return Product::where('on_menu', true)->take(5)->get();
    }

}
<?php 

namespace App\Repositories;

use App\Models\Product;
use App\Services\ImageService;

class ProductRepository {

    function __construct(ImageService $imageService)
    {
        $this->_imageService = $imageService;
    }

    public function getProductsOnMenu() {
        return Product::where('on_menu', true)->take(5)->get();
    }

    public function create($fields) {
        $fields['price'] = $fields['price'] * 100; // change to cents

        $fields['image_url'] = $this->_imageService->upload($fields['image'], config('project.product_image_options'));

        $fields['on_menu'] = true;

        return Product::create($fields);
    }

    public function edit($product, $fields) {
        $fields['price'] = $fields['price'] * 100;

        if (isset($fields['image_url'])) {
            $this->_imageService->delete($product->image_url, ['/uploads', '/thumbnail-large', '/thumbnail-small', '/thumbnail']);
            $fields['image_url'] = $this->_imageService->upload($fields['image_url'], config('project.product_image_options'));
        }

        return $product->update($fields);
    }

    public function getProducts() {
        return Product::all();
    }

}
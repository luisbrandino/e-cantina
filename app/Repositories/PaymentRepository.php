<?php

namespace App\Repositories;

use App\Repositories\CartRepository;

class PaymentRepository {

    public function __construct(CartRepository $cartRepository)
    {
        $this->_cartRepository = $cartRepository;
    }

    public function create() {

    }

}


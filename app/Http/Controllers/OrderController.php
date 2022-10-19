<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\OrderRepository;

class OrderController extends Controller
{
    function __construct(OrderRepository $orderRepository) {
        $this->_repository = $orderRepository;
    }

    public function get() {
        return $this->_repository->getOrders();
    }

}

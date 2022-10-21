<?php

namespace App\Http\Controllers;

use App\Models\Order;

use App\Repositories\OrderRepository;

class OrderController extends Controller
{
    function __construct(OrderRepository $orderRepository) {
        $this->_repository = $orderRepository;
    }

    public function get() {
        return $this->_repository->getOrders();
    }

    public function getPendingOrders() {
        return $this->_repository->getPendingOrders();
    }

    public function finish(Order $order) {
        return $this->_repository->finish($order);
    }

    public function cancel(Order $order) {
        return $this->_repository->cancel($order);
    }

}

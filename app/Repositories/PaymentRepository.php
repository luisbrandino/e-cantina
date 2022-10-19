<?php

namespace App\Repositories;

use App\Models\Item;
use App\Models\Order;
use App\Repositories\CartRepository;

use App\Repositories\OrderRepository;

class PaymentRepository {

    public function __construct(CartRepository $cartRepository, OrderRepository $orderRepository)
    {
        $this->_cartRepository = $cartRepository;
        $this->_orderRepository = $orderRepository;
    }

    public function create($fields) {
        if ($this->_cartRepository->isEmpty())
            return;

        $items = $this->_cartRepository->getItems();
        $total = $this->_cartRepository->getTotal();

        $fields['status'] = 'pending';
        $fields['total'] = $total;

        $order = $this->_orderRepository->create($fields);

        foreach ($items as $item) {
            $order->products()->attach($item->associatedModel->id, ['quantity' => $item->quantity]);
        }

        $this->_cartRepository->clear();

        $order->refresh();

        return $order;
    }

}


<?php

namespace App\Repositories;

use App\Models\Item;
use App\Models\Order;
use App\Repositories\CartRepository;
use Illuminate\Support\Facades\Auth;

class PaymentRepository {

    public function __construct(CartRepository $cartRepository)
    {
        $this->_cartRepository = $cartRepository;
    }

    public function create($fields) {
        if ($this->_cartRepository->isEmpty())
            return;

        $items = $this->_cartRepository->getItems();
        $total = $this->_cartRepository->getTotal();
        
        $fields['status'] = 'pending';
        $fields['total'] = $total;

        $order = Auth::user()->orders()->create($fields);

        /*
        $order = Order::create([
            'name' => Auth::user()->name,
            'user_id' => Auth::id(),
            'total' => $total
        ]);
        */

        foreach ($items as $item) {
            $order->products()->attach($item->associatedModel->id, ['quantity' => $item->quantity]);
        }
        
        $this->_cartRepository->clear();

        $order->refresh();

        return $order;
    }

}


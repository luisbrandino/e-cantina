<?php

namespace App\Repositories;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderRepository {

    public function create($fields) {
        return Auth::user()->orders()->create($fields);

        /*
        $order = Order::create([
            'name' => Auth::user()->name,
            'user_id' => Auth::id(),
            'total' => $total
        ]);
        */
    }

    public function getOrders() {
        return Order::with('products')->get();
    }

    public function getPendingOrders() {
        return Order::with('products')->where('status', '=', 'pending')->orderBy('created_at', 'DESC')->get();
    }

    public function finish(Order $order) {
        $order->update([
            'status' => 'finished'
        ]);

        return true;
    }

    public function cancel(Order $order) {
        $order->update([
            'status' => 'cancelled'
        ]);

        return true;
    }

}


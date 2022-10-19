<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderCreateRequest;
use App\Repositories\PaymentRepository;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function __construct(PaymentRepository $repository)
    {
        $this->_repository = $repository;
    }

    public function success(OrderCreateRequest $request) {
        $order = $this->_repository->create($request->validated());

        if (is_null($order))
            return redirect()->back();

        return view('payment.success', ['order' => $order]);
    }


}

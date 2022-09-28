<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repositories\HomeRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Darryldecode\Cart\CartCondition;

class HomeController extends Controller
{
    public function __construct(HomeRepository $homeRepository)
    {
        $this->_repository = $homeRepository;
    }

    public function index() {
        $contents = $this->_repository->getContents();

        $product = $contents['products'][0];

        if (Auth::check()) {
            
        }

        return view('home', ['contents' => $contents]);
    }

    public function testCart() {
        $contents = \Cart::session(Auth::user()->microsoft_id)->getContent();

        return view('cart', ['contents' => $contents]);
    }
}

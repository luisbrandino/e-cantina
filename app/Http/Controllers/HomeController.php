<?php

namespace App\Http\Controllers;

use App\Repositories\HomeRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(HomeRepository $homeRepository)
    {
        $this->_repository = $homeRepository;
    }

    public function index() {
        $contents = $this->_repository->getContents();

        return view('home', ['contents' => $contents]);
    }
}

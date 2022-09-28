<?php

namespace App\Http\Controllers;

use App\Repositories\MenuRepository;

class MenuController extends Controller
{

    public function __construct(MenuRepository $repository) {
        $this->_repository = $repository;
    }

    public function index() {
        $contents = $this->_repository->getContents();

        return view('menu', ['contents' => $contents]);
    }

}

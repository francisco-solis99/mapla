<?php

namespace App\Controllers\Website;
use App\Controllers\BaseController;

class Product extends BaseController
{
    public function index()
    {
        return view('pages/product/index');
    }
}

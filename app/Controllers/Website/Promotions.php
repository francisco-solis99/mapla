<?php

namespace App\Controllers\Website;
use App\Controllers\BaseController;

class Promotions extends BaseController
{
    public function index()
    {
        return view('pages/promotions/index');
    }
}

<?php

namespace App\Controllers\Website;
use App\Controllers\BaseController;

class Technology extends BaseController
{
    public function index()
    {
        return view('pages/technology/index');
    }
}

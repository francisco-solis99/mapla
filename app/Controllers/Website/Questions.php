<?php

namespace App\Controllers\Website;
use App\Controllers\BaseController;

class Questions extends BaseController
{
    public function index()
    {
        return view('pages/questions/index');
    }
}

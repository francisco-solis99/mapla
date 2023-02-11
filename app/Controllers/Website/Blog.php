<?php

namespace App\Controllers\Website;
use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index()
    {
        return view('pages/blog/index');
    }
}

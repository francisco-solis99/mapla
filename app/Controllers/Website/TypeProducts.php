<?php

namespace App\Controllers\Website;
use App\Controllers\BaseController;

class TypeProducts extends BaseController
{
    public function index()
    {
        return view('pages/typeProducts/index');
    }
}

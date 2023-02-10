<?php

namespace App\Controllers\Website;
use App\Controllers\BaseController;

class Type extends BaseController
{
    public function index()
    {
        return view('pages/type/index');
    }
}

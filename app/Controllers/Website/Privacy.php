<?php

namespace App\Controllers\Website;
use App\Controllers\BaseController;

class Privacy extends BaseController
{
    public function index()
    {
        return view('pages/privacy/index');
    }
}

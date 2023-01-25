<?php

namespace App\Controllers\Website;
use App\Controllers\BaseController;

class Thanks extends BaseController
{
    public function index()
    {
        return view('pages/thanks/index');
    }
}

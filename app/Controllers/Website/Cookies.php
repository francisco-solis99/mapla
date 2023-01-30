<?php

namespace App\Controllers\Website;
use App\Controllers\BaseController;

class Cookies extends BaseController
{
    public function index()
    {
        return view('pages/cookies/index');
    }
}

<?php

namespace App\Controllers\Website;
use App\Controllers\BaseController;

class Catalogue extends BaseController
{
    public function index()
    {
        return view('pages/catalogue/index');
    }
}

<?php

namespace App\Controllers\Website;
use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index()
    {
        return view('pages/contact/index');
    }
}

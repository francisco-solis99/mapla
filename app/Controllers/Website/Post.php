<?php

namespace App\Controllers\Website;
use App\Controllers\BaseController;

class Post extends BaseController
{
    public function index()
    {
        return view('pages/post/index');
    }
}

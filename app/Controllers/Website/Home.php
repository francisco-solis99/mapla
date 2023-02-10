<?php

namespace App\Controllers\Website;
use App\Controllers\BaseController;

class Home extends BaseController
{

    public function index()
    {
        $products = [
            [
                'id' => '1',
                'name' => 'Sellamapla-A',
                'imageUrl' => '/images/products/product.webp',
                'measure' => 'Cubeta 0L',
                'price' => '0,000.00'
            ],
            [
                'id' => '2',
                'name' => 'Sellamapla-A',
                'imageUrl' => '/images/products/product.webp',
                'measure' => 'Cubeta 0L',
                'price' => '1,000.00'
            ],
            [
                'id' => '3',
                'name' => 'Sellamapla-A',
                'imageUrl' => '/images/products/product.webp',
                'measure' => 'Cubeta 0L',
                'price' => '1,000.00'
            ]
        ];
        return view('pages/home/index', [
            'products' => $products
        ]);
    }
}

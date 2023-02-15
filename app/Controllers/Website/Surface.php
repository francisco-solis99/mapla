<?php

namespace App\Controllers\Website;
use App\Controllers\BaseController;

class Surface extends BaseController
{
    public function index()
    {
        $products = [
            [
                'id' => '1',
                'name' => 'Sellamapla-A',
                'imageUrl' => '/images/products/product-item.webp',
                'measure' => 'Cubeta 0L',
                'price' => '0,000.00'
            ],
            [
                'id' => '2',
                'name' => 'Sellamapla-A',
                'imageUrl' => '/images/products/product-item.webp',
                'measure' => 'Cubeta 0L',
                'price' => '0,000.00'
            ],
            [
                'id' => '3',
                'name' => 'Sellamapla-A',
                'imageUrl' => '/images/products/product-item.webp',
                'measure' => 'Cubeta 0L',
                'price' => '0,000.00'
            ],
            [
                'id' => '4',
                'name' => 'Sellamapla-A',
                'imageUrl' => '/images/products/product-item.webp',
                'measure' => 'Cubeta 0L',
                'price' => '0,000.00'
            ],
            [
                'id' => '5',
                'name' => 'Sellamapla-A',
                'imageUrl' => '/images/products/product-item.webp',
                'measure' => 'Cubeta 0L',
                'price' => '0,000.00'
            ],
            [
                'id' => '6',
                'name' => 'Sellamapla-A',
                'imageUrl' => '/images/products/product-item.webp',
                'measure' => 'Cubeta 0L',
                'price' => '0,000.00'
            ],
            [
                'id' => '7',
                'name' => 'Sellamapla-A',
                'imageUrl' => '/images/products/product-item.webp',
                'measure' => 'Cubeta 0L',
                'price' => '0,000.00'
            ],
            [
                'id' => '8',
                'name' => 'Sellamapla-A',
                'imageUrl' => '/images/products/product-item.webp',
                'measure' => 'Cubeta 0L',
                'price' => '0,000.00'
            ],
            [
                'id' => '9',
                'name' => 'Sellamapla-A',
                'imageUrl' => '/images/products/product-item.webp',
                'measure' => 'Cubeta 0L',
                'price' => '0,000.00'
            ],
            [
                'id' => '10',
                'name' => 'Sellamapla-A',
                'imageUrl' => '/images/products/product-item.webp',
                'measure' => 'Cubeta 0L',
                'price' => '0,000.00'
            ],
            [
                'id' => '11',
                'name' => 'Sellamapla-A',
                'imageUrl' => '/images/products/product-item.webp',
                'measure' => 'Cubeta 0L',
                'price' => '0,000.00'
            ],
            [
                'id' => '12',
                'name' => 'Sellamapla-A',
                'imageUrl' => '/images/products/product-item.webp',
                'measure' => 'Cubeta 0L',
                'price' => '0,000.00'
            ],

        ];
        return view('pages/surface/index', [
            'products' => $products
        ]);
    }
}

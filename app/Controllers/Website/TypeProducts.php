<?php

namespace App\Controllers\Website;
use App\Controllers\BaseController;

class TypeProducts extends BaseController
{
    public function index()
    {
        $types = [
            [
                'id' => 1,
                'name' => 'Pinturas Arquitectonicas',
                'image' => '../images/products/type/tipo1.webp'
            ],
            [
                'id' => 2,
                'name' => 'Pinturas Especiales',
                'image' => '../images/products/type/tipo2.webp'
            ],
            [
                'id' => 3,
                'name' => 'Selladores',
                'image' => '../images/products/type/tipo3.webp'
            ],
            [
                'id' => 4,
                'name' => 'Recubrimientos Texturizados',
                'image' => '../images/products/type/tipo4.webp'
            ],
            [
                'id' => 5,
                'name' => 'Recubrimientos Especiales',
                'image' => '../images/products/type/tipo5.webp'
            ],
            [
                'id' => 6,
                'name' => 'Barnices',
                'image' => '../images/products/type/tipo6.webp'
            ],
            [
                'id' => 7,
                'name' => 'Aditivos',
                'image' => '../images/products/type/tipo7.webp'
            ],
            [
                'id' => 8,
                'name' => 'Productos en polvo',
                'image' => '../images/products/type/tipo8.webp'
            ],
            [
                'id' => 9,
                'name' => 'Impermeabilizantes',
                'image' => '../images/products/type/tipo9.webp'
            ],

        ];

        return view('pages/typeProducts/index', [
            'types' => $types
        ]);
    }
}

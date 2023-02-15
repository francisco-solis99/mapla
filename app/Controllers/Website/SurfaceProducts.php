<?php

namespace App\Controllers\Website;
use App\Controllers\BaseController;

class SurfaceProducts extends BaseController
{
    public function index()
    {
        $surfaces = [
            [
                'id' => 1,
                'name' => 'Tablaroca',
                'image' => '../images/products/surface/superficie1.webp'
            ],
            [
                'id' => 2,
                'name' => 'Concreto',
                'image' => '../images/products/surface/superficie2.webp'
            ],
            [
                'id' => 3,
                'name' => 'Madera',
                'image' => '../images/products/surface/superficie3.webp'
            ],
            [
                'id' => 4,
                'name' => 'Durock',
                'image' => '../images/products/surface/superficie4.webp'
            ],
            [
                'id' => 5,
                'name' => 'Pavimento',
                'image' => '../images/products/surface/superficie5.webp'
            ],
            [
                'id' => 6,
                'name' => 'Plafones',
                'image' => '../images/products/surface/superficie6.webp'
            ],
            [
                'id' => 7,
                'name' => 'Tejas',
                'image' => '../images/products/surface/superficie7.webp'
            ],
            [
                'id' => 8,
                'name' => 'Adocreto',
                'image' => '../images/products/surface/superficie8.webp'
            ],
            [
                'id' => 9,
                'name' => 'Guarniciones',
                'image' => '../images/products/surface/superficie9.webp'
            ],
            [
                'id' => 10,
                'name' => 'Asfalto',
                'image' => '../images/products/surface/superficie10.webp'
            ],
            [
              'id' => 11,
              'name' => 'Canchas',
              'image' => '../images/products/surface/superficie11.webp'
            ],
            [
              'id' => 12,
              'name' => 'Acero',
              'image' => '../images/products/surface/superficie12.webp'
            ],
            [
              'id' => 13,
              'name' => 'Losas',
              'image' => '../images/products/surface/superficie13.webp'
            ],
            [
              'id' => 14,
              'name' => 'Asbesto',
              'image' => '../images/products/surface/superficie14.webp'
            ],
            [
              'id' => 15,
              'name' => 'Hormigón',
              'image' => '../images/products/surface/superficie15.webp'
            ],
            [
              'id' => 16,
              'name' => 'Barro',
              'image' => '../images/products/surface/superficie16.webp'
            ],

        ];

        return view('pages/surfaceProducts/index', [
            'surfaces' => $surfaces
        ]);
    }
}

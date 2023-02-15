<?php

namespace App\Controllers\Website;
use App\Controllers\BaseController;

class Shops extends BaseController
{
    public function index()
    {

        $shops = [
            [
                'id' => 1,
                'name' => 'Av. Puerto Juárez.',
                'city' => 'Cancún',
                'address' => 'Av. Puerto Juárez #714, Mza.114 Región 92.',
                'hours' => [
                    [
                       'label' => 'Lunes-Viernes',
                       'open' => '8 am',
                       'close' => '6 pm'
                    ],
                    [
                       'label' => 'Sabado',
                        'open' => '8 am',
                        'close' => '1 pm'
                    ]
                ],
                'phone' => '(998) 888 6761',
                'mapCoords' => '!1m18!1m12!1m3!1d3720.558887849823!2d-86.85859918512855!3d21.169945985922112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2c6e4af85d4d%3A0x893bcf2e1552fa07!2sMapla%20Soluciones%20y%20Pinturas%20Suc.Talleres!5e0!3m2!1ses!2smx!4v1676397177015!5m2!1ses!2smx'
            ],
            [
                'id' => 2,
                'name' => 'Blvd. Luis Donaldo Colosio',
                'city' => 'Cancún',
                'address' => 'Blvd. Luis Donaldo Colosio Km. 9.5 Alfredo V. Bonfil.',
                'hours' => [
                    [
                       'label' => 'Lunes-Viernes',
                       'open' => '8 am',
                       'close' => '6 pm'
                    ],
                    [
                       'label' => 'Sabado',
                        'open' => '8 am',
                        'close' => '1 pm'
                    ]
                ],
                'phone' => '(998) 888 6762',
                'mapCoords' => '!1m18!1m12!1m3!1d3722.5154548205287!2d-86.84438478512989!3d21.092006485964184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2be4f5c48665%3A0x810485dbfa3640df!2sMapla%20Soluciones%20y%20Pinturas%20Suc.Colosio!5e0!3m2!1ses!2smx!4v1676397213785!5m2!1ses!2smx'
            ],
            [
                'id' => 3,
                'name' => 'Av. Cancún',
                'city' => 'Cancún',
                'address' => 'Av. Cancún, Mz. 23 Lote1, Local 8 Reg. 515.',
                'hours' => [
                    [
                       'label' => 'Lunes-Viernes',
                       'open' => '8:30 am',
                       'close' => '6 am'
                    ],
                    [
                       'label' => 'Sabado',
                        'open' => '8 am',
                        'close' => '1 am'
                    ]
                ],
                'phone' => '(983) 145 3223',
                'mapCoords' => '!1m18!1m12!1m3!1d3721.486849681887!2d-86.8777350851292!3d21.13301498594201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2bc29ca9ce35%3A0x6dde93e3e67f16b3!2sMapla%20Soluciones%20y%20Pinturas%20Suc.%20Pol%C3%ADgono%20Sur!5e0!3m2!1ses!2smx!4v1676413849500!5m2!1ses!2smx'
            ],
            [
                'id' => 4,
                'name' => 'Col. Gonzalo Guerrero Norte',
                'city' => 'Playa del Carmen',
                'address' => 'Calle 26, entre 50 Avenida Nte. Y 45 Av. Nte. Mza. 9 Local 2, Col. Gonzalo Guerrero Norte.',
                'hours' => [
                    [
                       'label' => 'Lunes-Viernes',
                       'open' => '8 am',
                       'close' => '6 am'
                    ],
                    [
                       'label' => 'Sabado',
                        'open' => '8 am',
                        'close' => '1 am'
                    ]
                ],
                'phone' => '(984) 873 1277 / (984) 803 1325',
                'mapCoords' => '!1m18!1m12!1m3!1d3733.8100750691965!2d-87.07830468513778!3d20.636596886212214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4e4326e0b2f74d%3A0x65526c1f0bb4514e!2sMapla%20Soluciones%20y%20Pinturas%20Playa%20del%20Carmen!5e0!3m2!1ses!2smx!4v1676419029274!5m2!1ses!2smx'
            ],
            // MAPS COORDS
            [
                'id' => 5,
                'name' => 'Av. 65  Sur',
                'city' => 'Cozumel',
                'address' => 'Av. 65  Sur, Cuzamil 77667 San Miguel de Cozumel, Q.R.',
                'hours' => [
                    [
                       'label' => 'Lunes-Viernes',
                       'open' => '8 am',
                       'close' => '6 am'
                    ],
                    [
                       'label' => 'Sabado',
                        'open' => '8 am',
                        'close' => '1 am'
                    ]
                ],
                'phone' => '(987) 869 0110',
                'mapCoords' => '!1m18!1m12!1m3!1d3737.209569456448!2d-86.94597738514013!3d20.497633486288485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4e59d51fa3be1f%3A0xf8c5da7df1c9e2ed!2sMapla%20Soluciones%20y%20Pinturas%20Cozumel!5e0!3m2!1ses!2smx!4v1676418969597!5m2!1ses!2smx'
            ],
            [
                'id' => 6,
                'name' => 'Av. Benito Juárez',
                'city' => 'Chetumal',
                'address' => 'Av. Benito Juárez #267, entre San Salvador y Camelias, Col. David Gustavo Gutiérrez.',
                'hours' => [
                    [
                       'label' => 'Lunes-Viernes',
                       'open' => '8 am',
                       'close' => '5:30 am'
                    ],
                    [
                       'label' => 'Sabado',
                        'open' => '8 am',
                        'close' => '1:30 am'
                    ]
                ],
                'phone' => '(983) 145 3223',
                'mapCoords' => '!1m18!1m12!1m3!1d3783.442735760431!2d-88.29909433517209!3d18.508884637415797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5ba364819aa657%3A0x1c3f4a00a23bde8f!2sMapla%20Soluciones%20y%20Pinturas%20Suc.Chetumal!5e0!3m2!1ses!2smx!4v1676419505578!5m2!1ses!2smx'
            ],
            [
                'id' => 7,
                'name' => 'Col. Leandro Valle',
                'city' => 'Mérida',
                'address' => 'Calle 35 #248, entre Calle 10 y 12, Colonia Leandro Valle.',
                'hours' => [
                    [
                       'label' => 'Lunes-Viernes',
                       'open' => '8 am',
                       'close' => '6 am'
                    ],
                    [
                       'label' => 'Sabado',
                        'open' => '8 am',
                        'close' => '1 am'
                    ]
                ],
                'phone' => '(999) 926 8250 / (999) 172 5475',
                'mapCoords' => '!1m18!1m12!1m3!1d3724.850027436525!2d-89.5660467!3d20.998648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56774b26700b9d%3A0x79750b86c2f86f5a!2sMapla%20Soluciones%20y%20Pinturas%20Suc.M%C3%A9rida!5e0!3m2!1ses!2smx!4v1676417665274!5m2!1ses!2smx'
            ],
            [
                'id' => 8,
                'name' => 'Calle Satélite Norte',
                'city' => 'Tulum',
                'address' => 'Calle Satélite Norte, Mza. 51 Lote2, Tulum Pueblo Tulum, Quintana Roo, México. C.P. 77780.',
                'hours' => [
                    [
                       'label' => 'Lunes-Viernes',
                       'open' => '8 am',
                       'close' => '6 am'
                    ],
                    [
                       'label' => 'Sabado',
                        'open' => '8 am',
                        'close' => '1 am'
                    ]
                ],
                'phone' => '(984) 871 2296 / (984) 802 5320',
                'mapCoords' => '!1m18!1m12!1m3!1d3744.030673173309!2d-87.4598255!3d20.2160464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4fd78931707ad1%3A0xa4d01b1588d97b3f!2sMapla%20Soluciones%20y%20Pinturas%20Suc.%20Tulum!5e0!3m2!1ses!2smx!4v1676417705071!5m2!1ses!2smx'
            ],
            [
                'id' => 9,
                'name' => 'Col. 28 de Julio',
                'city' => 'Petempich',
                'address' => 'Av. 28 de Julio (115) Mza. 36 local 4 esq. Av. de las Naciones Col. 28 de Julio. Playa del Carmen',
                'hours' => [
                    [
                       'label' => 'Lunes-Viernes',
                       'open' => '8 am',
                       'close' => '6 am'
                    ],
                    [
                       'label' => 'Sabado',
                        'open' => '8 am',
                        'close' => '1 am'
                    ]
                ],
                'phone' => '(987) 564 03 49',
                'mapCoords' => '!1m18!1m12!1m3!1d14933.941753653678!2d-87.08306047154284!3d20.64982047927631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4e43ad93cd6977%3A0x56aa53cd24345434!2sMapla%20Soluciones%20y%20Pinturas%20Suc.%20Petempich!5e0!3m2!1ses!2smx!4v1676419131724!5m2!1ses!2smx'
            ],
            [
                'id' => 10,
                'name' => 'Col. Centro',
                'city' => 'Valladolid',
                'address' => 'Centro Comercial Bazar Oriente Calle 39, local 1 Col. Centro 97780 Valladolid, Yuc.',
                'hours' => [
                    [
                       'label' => 'Lunes-Viernes',
                       'open' => '8 am',
                       'close' => '6 am'
                    ],
                    [
                       'label' => 'Sabado',
                        'open' => '8 am',
                        'close' => '1 am'
                    ]
                ],
                'phone' => '(985) 688 0664 / (998) 147 6771',
                'mapCoords' => '!1m18!1m12!1m3!1d3732.4744405703145!2d-88.20715349999999!3d20.6909502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f510bbbe3734a5f%3A0x7ede16f1501b1274!2sMapla%20Soluciones%20y%20Pinturas%20Suc.Valladolid!5e0!3m2!1ses!2smx!4v1676417793102!5m2!1ses!2smx'
            ],
            [
                'id' => 11,
                'name' => 'Col. Vicente Guerrero',
                'city' => 'José María Morelos',
                'address' => 'Calle Vicente Guerrero S/N Col. Vicente Guerrero Entre Chichan Kanab y Yaxchilam.',
                'hours' => [
                    [
                       'label' => 'Lunes-Viernes',
                       'open' => '7 am',
                       'close' => '6 am'
                    ],
                    [
                       'label' => 'Sabado',
                        'open' => '8 am',
                        'close' => '2 am'
                    ]
                ],
                'phone' => 'Sin Numero',
                'mapCoords' => '!1m18!1m12!1m3!1d3722.5154548205287!2d-86.84438478512989!3d21.092006485964184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2be4f5c48665%3A0x810485dbfa3640df!2sMapla%20Soluciones%20y%20Pinturas%20Suc.Colosio!5e0!3m2!1ses!2smx!4v1676418116143!5m2!1ses!2smx'
            ]
        ];

        return view('pages/shops/index', [
            'shops' => $shops
        ]);
    }
}

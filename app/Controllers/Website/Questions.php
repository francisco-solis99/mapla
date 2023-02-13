<?php

namespace App\Controllers\Website;
use App\Controllers\BaseController;

class Questions extends BaseController
{
    public function index()
    {
        $questions = [
            [
                'id'=> 1,
                'title' => 'Pregunta frecuente 1',
                'content' => 'Pellentesque felis lorem, vulputate in pellentesque ut, faucibus ut nibh. Proin convallis, tortor sit amet rhoncus ornare, velit ligula pretium ex, at ultrices sapien massa a sem. Sed accumsan blandit ligula, vitae volutpat odio vehicula id. Donec commodo molestie orci, at tempor purus iaculis vitae. Mauris eget est sit amet diam sodales vulputate sodales nec tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce pellentesque pretium leo nec commodo. Aliquam porttitor ullamcorper ipsum, in vulputate nisl mollis a. Fusce convallis massa id consectetur congue. Sed id ex lacus. Mauris at sem eget sem sodales pretium. Vestibulum nec maximus neque, ut ultrices libero.'
            ],
            [
                'id'=> 2,
                'title' => 'Pregunta frecuente 2',
                'content' => 'Pellentesque felis lorem, vulputate in pellentesque ut, faucibus ut nibh. Proin convallis, tortor sit amet rhoncus ornare, velit ligula pretium ex, at ultrices sapien massa a sem. Sed accumsan blandit ligula, vitae volutpat odio vehicula id. Donec commodo molestie orci, at tempor purus iaculis vitae. Mauris eget est sit amet diam sodales vulputate sodales nec tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce pellentesque pretium leo nec commodo. Aliquam porttitor ullamcorper ipsum, in vulputate nisl mollis a. Fusce convallis massa id consectetur congue. Sed id ex lacus. Mauris at sem eget sem sodales pretium. Vestibulum nec maximus neque, ut ultrices libero.'
            ],
            [
                'id'=> 3,
                'title' => 'Pregunta frecuente 3',
                'content' => 'Pellentesque felis lorem, vulputate in pellentesque ut, faucibus ut nibh. Proin convallis, tortor sit amet rhoncus ornare, velit ligula pretium ex, at ultrices sapien massa a sem. Sed accumsan blandit ligula, vitae volutpat odio vehicula id. Donec commodo molestie orci, at tempor purus iaculis vitae. Mauris eget est sit amet diam sodales vulputate sodales nec tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce pellentesque pretium leo nec commodo. Aliquam porttitor ullamcorper ipsum, in vulputate nisl mollis a. Fusce convallis massa id consectetur congue. Sed id ex lacus. Mauris at sem eget sem sodales pretium. Vestibulum nec maximus neque, ut ultrices libero.'
            ],
            [
                'id'=> 4,
                'title' => 'Pregunta frecuente 4',
                'content' => 'Pellentesque felis lorem, vulputate in pellentesque ut, faucibus ut nibh. Proin convallis, tortor sit amet rhoncus ornare, velit ligula pretium ex, at ultrices sapien massa a sem. Sed accumsan blandit ligula, vitae volutpat odio vehicula id. Donec commodo molestie orci, at tempor purus iaculis vitae. Mauris eget est sit amet diam sodales vulputate sodales nec tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce pellentesque pretium leo nec commodo. Aliquam porttitor ullamcorper ipsum, in vulputate nisl mollis a. Fusce convallis massa id consectetur congue. Sed id ex lacus. Mauris at sem eget sem sodales pretium. Vestibulum nec maximus neque, ut ultrices libero.'
            ],
        ];

        return view('pages/questions/index', [
            'questions' => $questions
        ]);
    }
}

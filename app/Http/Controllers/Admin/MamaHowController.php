<?php

namespace App\Http\Controllers\Admin;

use App\Models\HomePageModel;
use App\Models\LanguageModel;
use App\Models\MamaHowModel;


class MamaHowController extends GenericController
{
    function __construct()
    {

        parent::__construct();

        $this->model = MamaHowModel::class;

        $this->title = 'Mama, how?';

        $this->unique = true;

        $this->form = [
            [
                'title' => 'Mamalink  |  Mama, how?',
                'icon' => 'info',
                'inputs' => [
                    [
                        'label' => 'Imagem',
                        'name' => 'image',
                        'input' => 'image',
                        'size' => 3
                    ],
                    [
                        'label' => 'Pré título',
                        'name' => 'pre_title',
                        'size' => 9

                    ],
                    [
                        'label' => 'Link para o vídeo',
                        'name' => 'image_link',
                        'size' => 9


                    ],
                    [
                        'label' => 'Abre em nova guia?',
                        'name' => 'image_link_target',
                        'input' => 'checkbox',
                        'size' => 3


                    ],
                    [
                        'label' => 'Título',
                        'name' => 'title',
                        'input' => 'textarea',
                        'inline' => true,
                    ],
                    [
                        'label' => 'Frase descritiva',
                        'name' => 'desc',
                        'input' => 'textarea',
                        'inline' => true,
                    ],

                    [
                        'label' => 'Bullet Points',
                        'input' => 'link',
                        'link' => 'admin.mamahow-bullets'
                    ],


                ],
            ],
            [
                'title' => 'Mama, how?  |  Contador da esquerda',
                'icon' => 'info',
                'inputs' => [
                    [
                        'label' => 'Número do contador',
                        'name' => 'counter_1_value',
                        'size' => 6
                    ],
                    [
                        'label' => 'Número do contador quantidade',
                        'name' => 'counter_1_valueinfo',
                        'hint' => 'O texto que aparece ao lado do número',
                        'size' => 6

                    ],
                    [
                        'label' => 'Texto abaixo',
                        'name' => 'counter_1_caption',

                    ],
                    [
                        'label' => 'Texto à direita',
                        'name' => 'counter_1_text',
                        'input' => 'textarea',
                        'inline' => true,
                    ],

                ],
            ],
            [
                'title' => 'Mama, how?  |  Contador da direita',
                'icon' => 'info',
                'inputs' => [
                    [
                        'label' => 'Número do contador',
                        'name' => 'counter_2_value',
                        'size' => 6
                    ],
                    [
                        'label' => 'Número do contador quantidade',
                        'name' => 'counter_2_valueinfo',
                        'hint' => 'O texto que aparece ao lado do número',
                        'size' => 6

                    ],
                    [
                        'label' => 'Texto abaixo',
                        'name' => 'counter_2_caption',

                    ],
                    [
                        'label' => 'Texto à direita',
                        'name' => 'counter_2_text',
                        'input' => 'textarea',
                        'inline' => true,
                    ],

                ],
            ],
            [
                'title' => 'Mama, how?  |  Textos flutuantes',
                'icon' => 'info',
                'inputs' => [
                    [
                        'label' => 'Texto esquerda',
                        'name' => 'bullet_1',
                        'input' => 'textarea',
                        'inline' => true,
                    ],
                    [
                        'label' => 'Texto meio',
                        'name' => 'bullet_2',
                        'input' => 'textarea',
                        'inline' => true,
                    ],
                    [
                        'label' => 'Texto direita',
                        'name' => 'bullet_3',
                        'input' => 'textarea',
                        'inline' => true,
                    ],

                ],
            ],
        ];
    }
}

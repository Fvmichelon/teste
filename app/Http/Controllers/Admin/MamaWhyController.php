<?php

namespace App\Http\Controllers\Admin;

use App\Models\HomePageModel;
use App\Models\LanguageModel;
use App\Models\MamaWhyModel;


class MamaWhyController extends GenericController
{
    function __construct()
    {

        parent::__construct();

        $this->model = MamaWhyModel::class;

        $this->title = 'Mama, why?';

        $this->unique = true;

        $this->form = [
            [
                'title' => 'Mamalink  |  Mama, why?',
                'icon' => 'info',
                'inputs' => [
                    [
                        'label' => 'Imagem Maior',
                        'name' => 'big_image',
                        'input' => 'image',
                        'size' => 3
                    ],
                    [
                        'label' => 'Imagem Menor',
                        'name' => 'small_image',
                        'input' => 'image',
                        'size' => 3
                    ],
                    [
                        'label' => 'Pré título',
                        'name' => 'pre_title',
                        'size' => 6
                    ],
                    [
                        'label' => 'Título',
                        'name' => 'title',
                        'input' => 'textarea',
                        'inline' => true,
                    ],
                    [
                        'label' => 'Resumo',
                        'name' => 'caption',
                        'input' => 'textarea',
                        'inline' => true,
                        'hint' => 'Texto logo abaixo do título'
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
                        'link' => 'admin.mamawhy-bullets'
                    ],
                    [
                        'label' => 'Texto do botão',
                        'name' => 'btn_text',
                        'size' => 5
                    ],
                    [
                        'label' => 'Link do botão',
                        'name' => 'btn_link',
                        'size' => 5
                    ],
                    [
                        'label' => 'Abre em nova guia?',
                        'name' => 'btn_target',
                        'input' => 'checkbox',
                        'size' => 2
                    ],
                ],
            ],
        ];
    }
}

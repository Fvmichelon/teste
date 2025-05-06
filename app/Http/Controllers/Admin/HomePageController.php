<?php

namespace App\Http\Controllers\Admin;

use App\Models\HomePageModel;
use App\Models\LanguageModel;

class HomePageController extends GenericController
{
    function __construct()
    {

        parent::__construct();

        $this->model = HomePageModel::class;

        $this->title = 'MamaLink | Páginas iniciais';

        $this->sortable = 'position';

        $this->table = [
            [
                'label' => '#',
                'name' => 'id',
                'size' => 50
            ],
            [
                'label' => 'Título',
                'name' => 'title',
            ],
        ];

        $this->form = [
            [
                'title' => 'Página inicial | Itens',
                'icon' => 'house',
                'inputs' => [
                    [
                        'label' => 'Imagem de fundo',
                        'name' => 'banner',
                        'input' => 'image',
                        'validators' => ['required']
                    ],
                    [
                        'label' => 'Pré título',
                        'name' => 'pre-title',
                    ],
                    [
                        'label' => 'Título',
                        'name' => 'title',
                        'validators' => ['required']
                    ],
                    [
                        'label' => 'Texto do botão',
                        'name' => 'btn_text',
                        'size' =>5,
                    ],
                    [
                        'label' => 'Link do botão',
                        'name' => 'btn_link',
                        'size' =>5,
                    ],
                    [
                        'label' => 'Abre nova guia?',
                        'name' => 'btn_redirect',
                        'input' => 'checkbox',
                        'size' => 2
                    ]
                ],
            ],
        ];
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\HomePageModel;
use App\Models\LanguageModel;
use App\Models\AboutModel;


class AboutController extends GenericController
{
    function __construct()
    {

        parent::__construct();

        $this->model = AboutModel::class;

        $this->title = 'Sobre a MamaLink | Mama, who?';

        $this->sortable = 'position';

        $this->table = [
            [
                'label' => 'Título',
                'name' => 'title',
            ],
        ];

        $this->form = [
            [
                'title' => 'Sobre nós',
                'icon' => 'description',
                'inputs' => [
                    [
                        'label' => 'Imagem',
                        'name' => 'banner',
                        'input' => 'image',
                        'validators' => ['required']
                    ],
                    [
                        'label' => 'Pré título',
                        'name' => 'pre-title',
                        'size' =>6
                    ],
                    [
                        'label' => 'Texto do balão',
                        'name' => 'banner_desc',
                        'size' =>6,
                    ],
                    [
                        'label' => 'Título',
                        'name' => 'title',
                        'validators' => ['required']
                    ],
                    [
                        'label' => 'Texto',
                        'name' => 'desc',
                        'input' => 'textarea',
                        'inline' =>true
                    ],

                    [
                        'label' => 'Cadastrar características',
                        'input' => 'link',
                        'link' => 'admin.sobre-itens'
                    ],

                ],
            ],
        ];
    }
}

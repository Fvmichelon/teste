<?php

namespace App\Http\Controllers\Admin;

use App\Models\HomePageModel;
use App\Models\LanguageModel;
use App\Models\WhyModel;


class WhyController extends GenericController
{
    function __construct()
    {

        parent::__construct();

        $this->model = WhyModel::class;

        $this->title = 'Porque escolher a Mamalink?';

        $this->unique = true;

        $this->form = [
            [
                'title' => 'Benefícios de escolher a Mamalink  |  Mama, Why?',
                'icon' => 'thumb_up',
                'inputs' => [
                    [
                        'label' => 'Imagem',
                        'name' => 'banner',
                        'input' => 'image',
                        'validators' => ['required'],
                    ],
                    [
                        'label' => 'Pré título',
                        'name' => 'pre-title',
                        'input' => 'textarea',
                        'inline' =>true,

                    ],
                    [
                        'label' => 'Título',
                        'name' => 'title',
                        'input' => 'textarea',
                        'inline' =>true,
                        'validators' => ['required']
                    ],
                    [
                        'label' => 'Cadastrar características',
                        'input' => 'link',
                        'link' => 'admin.escolha-a-mamalink-itens'
                    ],

                ],
            ],
        ];
    }
}

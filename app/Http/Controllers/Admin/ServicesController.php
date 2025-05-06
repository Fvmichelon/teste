<?php

namespace App\Http\Controllers\Admin;

use App\Models\ServicesModel;

class ServicesController extends GenericController
{
    function __construct()
    {

        parent::__construct();

        $this->model = ServicesModel::class;

        $this->title = 'Serviços';

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
                'title' => 'Serviços prestados pela MamaLink | Mama, What?',
                'icon' => 'support_agent',
                'inputs' => [
                    // [
                    //     'label' => 'Imagem',
                    //     'name' => 'icon',
                    //     'input' => 'image',
                    //     'hint' => 'Se a imagem não for cadastrada, o ícone de alvo será a imagem padrão'
                    // ],
                    [
                        'label' => 'Título',
                        'name' => 'title',
                        'validators' => ['required'],
                        'size' => 10

                    ],
                    [
                        'label' => 'Ativo?',
                        'name' => 'active',
                        'input' => 'checkbox',
                        'size' => 2

                    ],
                    [
                        'label' => 'Texto',
                        'name' => 'desc',
                        'input' => 'textarea',
                        'inline' =>true

                    ],
                ],
            ],
        ];
    }
}

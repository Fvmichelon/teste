<?php

namespace App\Http\Controllers\Admin;

use App\Models\HomePageModel;
use App\Models\LanguageModel;
use App\Models\AboutModel;
use App\Models\PartnersModel;


class PartnersController extends GenericController
{
    function __construct()
    {

        parent::__construct();

        $this->model = PartnersModel::class;

        $this->title = 'MamaLink | Empresas Parceiras';

        $this->sortable = 'position';

        $this->table = [
            [
                'label' => '#',
                'name' => 'id',
                'size' => 50
            ],
            [
                'label' => 'Nome',
                'name' => 'name',
            ],
        ];

        $this->form = [
            [
                'title' => 'Empresa',
                'icon' => 'description',
                'inputs' => [
                    [
                        'label' => 'logo da Empresa',
                        'name' => 'logo',
                        'input' => 'image',
                        'validators' => ['required']
                    ],
                    [
                        'label' => 'Nome da empresa',
                        'name' => 'name',
                        'size' => 6
                    ],
                    [
                        'label' => 'Link do site da empresa',
                        'name' => 'link',
                        'size' => 6
                    ],
                ],
            ],
        ];
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\HomePageModel;
use App\Models\LanguageModel;
use App\Models\AboutItemsModel;


class AboutItemsController extends GenericController
{
    function __construct()
    {

        parent::__construct();

        $this->model = AboutItemsModel::class;

        $this->title = 'Sobre a MamaLink | Itens';

        $this->sortable = 'position';

        $this->fk = 'about_card_id';

        $this->table = [
            [
                'label' => '#',
                'name' => 'id',
                'size' => 50
            ],
            [
                'label' => 'Texto',
                'name' => 'bullet-point',
            ],
        ];

        $this->form = [
            [
                'title' => 'Sobre a MamaLink | Itens | Destaques',
                'icon' => 'stars',
                'inputs' => [
                    [
                        'label' => 'Texto',
                        'name' => 'bullet-point',
                        'size' =>10
                    ],
                    [
                        'label' => 'Ativo?',
                        'name' => 'active',
                        'input' => 'checkbox',
                        'size' => 2
                    ],

                ],
            ],
        ];
    }
}

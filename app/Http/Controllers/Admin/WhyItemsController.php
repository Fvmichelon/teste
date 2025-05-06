<?php

namespace App\Http\Controllers\Admin;

use App\Models\HomePageModel;
use App\Models\LanguageModel;
use App\Models\WhyItemsModel;


class WhyItemsController extends GenericController
{
    function __construct()
    {

        parent::__construct();

        $this->model = WhyItemsModel::class;

        $this->title = 'Mama, Why | Detalhes';

        $this->sortable = 'position';

        $this->fk = 'why_choose_us_card_id';

        $this->table = [
            [
                'label' => '#',
                'name' => 'id',
                'size' => 50
            ],
            [
                'label' => 'Texto',
                'name' => 'desc',
            ],
        ];

        $this->form = [
            [
                'title' => 'Benefícios de escolher a Mamalink | Descrição ',
                'icon' => 'description',
                'inputs' => [
                    [
                        'label' => 'Descrição',
                        'name' => 'desc',
                    ],
                    [
                        'label' => 'Ativo?',
                        'name' => 'active',
                        'input' => 'checkbox',
                    ],
                    [
                        'label' => 'Cadastrar características',
                        'input' => 'link',
                        'link' => 'admin.escolha-a-mamalink-itens-destaques'
                    ],

                ],
            ],
        ];
    }
}

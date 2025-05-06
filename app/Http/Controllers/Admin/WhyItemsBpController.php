<?php

namespace App\Http\Controllers\Admin;

use App\Models\HomePageModel;
use App\Models\LanguageModel;
use App\Models\WhyItemsModel;
use App\Models\WhyItemsBpModel;



class WhyItemsBpController extends GenericController
{
    function __construct()
    {

        parent::__construct();

        $this->model = WhyItemsBpModel::class;

        $this->title = 'Benefícios de escolher a Mamalink | Descrição | Destaques';

        $this->sortable = 'position';

        $this->fk = 'why_choose_us_bp_id';

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
                'title' => 'Pontos em Destaque',
                'icon' => 'star',
                'inputs' => [
                    [
                        'label' => 'Texto do Destaque',
                        'name' => 'bullet-point',
                    ],


                ],
            ],
        ];
    }
}

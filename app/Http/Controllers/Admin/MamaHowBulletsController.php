<?php

namespace App\Http\Controllers\Admin;

use App\Models\HomePageModel;
use App\Models\LanguageModel;
use App\Models\AboutModel;
use App\Models\MamaHowBulletsModel;


class MamaHowBulletsController extends GenericController
{
    function __construct()
    {

        parent::__construct();

        $this->model = MamaHowBulletsModel::class;

        $this->title = 'Mama How | Itens';

        $this->sortable = 'position';

        $this->table = [
            [
                'label' => '#',
                'name' => 'id',
                'size' => 50
            ],
            [
                'label' => 'Nome',
                'name' => 'text',
            ],
        ];

        $this->form = [
            [
                'title' => 'Bullet Points',
                'icon' => 'description',
                'inputs' => [

                    [
                        'label' => 'Texto',
                        'name' => 'text',
                        'size' => 12
                    ],

                ],
            ],
        ];
    }
}

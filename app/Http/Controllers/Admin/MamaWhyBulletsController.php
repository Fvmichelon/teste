<?php

namespace App\Http\Controllers\Admin;

use App\Models\HomePageModel;
use App\Models\LanguageModel;
use App\Models\AboutModel;
use App\Models\MamaWhyBulletsModel;


class MamaWhyBulletsController extends GenericController
{
    function __construct()
    {

        parent::__construct();

        $this->model = MamaWhyBulletsModel::class;

        $this->title = 'Mama Why | Itens';

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
                'icon' => 'info',
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

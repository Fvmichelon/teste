<?php

namespace App\Http\Controllers\Admin;

use App\Models\HomePageModel;
use App\Models\LanguageModel;
use App\Models\GeneralModel;


class ContactController extends GenericController
{
    function __construct()
    {

        parent::__construct();

        $this->model = GeneralModel::class;

        $this->title = 'Porque escolher a Mamalink?';

        $this->unique = true;

        $this->form = [
            [
                'title' => 'MamaLink | Seção contato dos clientes',
                'icon' => 'phone',
                'inputs' => [
                    [
                        'label' => 'Pré título',
                        'name' => 'contact-us-pre-title',
                    ],
                    [
                        'label' => 'Título',
                        'name' => 'contact-us-title',
                        'input' => 'textarea',
                        'inline' => true
                    ],
                    [
                        'label' => 'Texto do botão',
                        'name' => 'btn_text',
                    ],
                    // [
                    //     'label' => 'Link do botão',
                    //     'name' => 'btn_link',
                    //     'size' => 6
                    // ],

                ],
            ],
            [
                'title' => 'MamaLink | Call to action',
                'icon' => 'phone',
                'inputs' => [
                    [
                        'label' => 'Título',
                        'name' => 'cta_title',
                        'input' => 'textarea',
                        'inline' => true
                    ],
                    [
                        'label' => 'Texto do botão',
                        'name' => 'cta_btn_text',
                        'size' => 12
                    ],
                    // [
                    //     'label' => 'Texto do botão',
                    //     'name' => 'cta_btn_link',
                    //     'size' => 5
                    // ],
                    // [
                    //     'label' => 'Texto do botão',
                    //     'name' => 'cta_btn_target',
                    // ],
                ],
            ],
        ];
    }
}

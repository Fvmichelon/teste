<?php

namespace App\Http\Controllers\Admin;

use App\Models\HomePageModel;
use App\Models\LanguageModel;
use App\Models\ComplianceModel;


class AboutFooterController extends GenericController
{
    function __construct()
    {

        parent::__construct();

        $this->model = ComplianceModel::class;

        $this->title = 'Sobre a MamaLink | Rodapé';

        $this->unique = true;


        $this->form = [
            [
                'title' => 'Sobre nós',
                'icon' => 'description',
                'inputs' => [
                    [
                        'label' => 'Título',
                        'name' => 'footer_title',
                        'hint' => 'Título da seção "sobre" do rodapé'
                    ],
                    [
                        'label' => 'Descrição',
                        'name' => 'footer_desc',
                        'hint' => 'Resumo da seção "sobre" para ser inserido no rodapé'
                    ],
                    [
                        'label' => 'Endereço',
                        'name' => 'adress_btn_text',
                    ],
                    [
                        'label' => 'Link para o google maps',
                        'name' => 'adress_btn_link',
                        'size' => 10
                    ],
                    [
                        'label' => 'Link deve abrir nova guia?',
                        'name' => 'adress_btn_target',
                        'input' => 'checkbox',
                        'size' => 2
                    ],
                    [
                        'label' => 'Mostrar número de telefone?',
                        'name' => 'adress_active',
                        'input' => 'checkbox',
                        'size' => 4
                    ],
                    [
                        'label' => 'Mostrar email?',
                        'name' => 'adress_active',
                        'input' => 'checkbox',
                        'size' => 4
                    ],
                    [
                        'label' => 'Mostrar endereço?',
                        'name' => 'adress_active',
                        'input' => 'checkbox',
                        'size' => 4
                    ],





                ],
            ],
        ];
    }
}

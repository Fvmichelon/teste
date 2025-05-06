<?php

namespace App\Http\Controllers\Admin;

use App\Models\HomePageModel;
use App\Models\LanguageModel;
use App\Models\ComplianceModel;


class ComplianceController extends GenericController
{
    function __construct()
    {

        parent::__construct();

        $this->model = ComplianceModel::class;

        $this->title = 'MamaLink | Compliance';

        $this->unique = true;

        $this->form = [
            [
                'title' => 'MamaLink | Compliance',
                'icon' => 'description',
                'inputs' => [
                    [
                        'label' => 'Texto de copyright',
                        'name' => 'copyright',
                    ],
                    [
                        'label' => 'Texto termos de uso',
                        'name' => 'terms_of_use_text',
                        'size' =>5,
                    ],
                    [
                        'label' => 'Arquivo termos de uso',
                        'name' => 'terms_of_use_file',
                        'input' =>'file',
                        'size' =>5,
                    ],
                    [
                        'label' => 'Mostrar opção termos de uso?',
                        'name' => 'terms_of_use_active',
                        'input' =>'checkbox',
                        'size' =>2,
                    ],
                    [
                        'label' => 'Texto política de privacidade',
                        'name' => 'privacy_policy_text',
                        'size' =>5,
                    ],
                    [
                        'label' => 'Arquivo política de privacidade',
                        'name' => 'privacy_policy_file',
                        'input' =>'file',
                        'size' =>5,
                    ],
                    [
                        'label' => 'Mostrar opção política de privacidade?',
                        'name' => 'privacy_policy_active',
                        'input' =>'checkbox',
                        'size' =>2,
                    ],
                    [
                        'label' => 'Título da newsletter',
                        'name' => 'newsletter_title',
                        'size' =>5,
                    ],
                    [
                        'label' => 'Aviso da newsletter',
                        'name' => 'newsletter_warning',
                        'size' =>5,
                        'hint' => 'texto antes de "termos de uso e política de privacidade"'
                    ],
                    [
                        'label' => 'Mostrar opção de inscrever-se na newsletter?',
                        'name' => 'newsletter_active',
                        'input' =>'checkbox',
                        'size' =>2,
                    ],

                ],
            ],
        ];
    }
}

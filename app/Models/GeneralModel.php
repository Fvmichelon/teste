<?php

namespace App\Models;

class GeneralModel extends BaseModel
{
    protected $table = 'admin_general';

    protected $fillable = [
        'logo',
        'logo_alt',
        'favicon',
        'email',
        'phone',
        'whatsapp',
        'facebook',
        'instagram',
        'youtube',
        'linkedin',
        'script_head',
        'script_body',
        'script_footer',
        'contact-us-pre-title',
        'contact-us-title',
        'btn_text',
        'btn_link',
        'cta_title',
        'cta_btn_text',
        'cta_btn_link',
        'cta_btn_target'
    ];

}

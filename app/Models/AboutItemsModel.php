<?php

namespace App\Models;

class AboutItemsModel extends BaseModel
{

    protected $table = 'about_items';

    public function aboutCard()
    {
        return $this->belongsTo(AboutModel::class,'id', 'about_card_id');
    }
}

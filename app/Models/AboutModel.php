<?php

namespace App\Models;

class AboutModel extends BaseModel
{
    protected $table = 'about';

    public function aboutItems()
    {
        return $this->hasMany(AboutItemsModel::class, 'about_card_id', 'id');
    }

}

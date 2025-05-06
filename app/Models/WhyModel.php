<?php

namespace App\Models;

class WhyModel extends BaseModel
{
    protected $table = 'why_choose_us';

    public function aboutItems()
    {
        return $this->hasMany(WhyItemsModel::class, 'why_choose_us_card_id', 'id');
    }

}

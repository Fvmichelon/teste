<?php

namespace App\Models;

class WhyItemsModel extends BaseModel
{

    protected $table = 'why_choose_us_items';

    public function aboutCard()
    {
        return $this->belongsTo(WhyModel::class,'id', 'why_choose_us_card_id');

    }
    public function aboutCardBp()
    {
        return $this->hasMany(WhyItemsBpModel::class, 'why_choose_us_bp_id', 'id');
    }

}

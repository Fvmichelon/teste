<?php

namespace App\Models;

class WhyItemsBpModel extends BaseModel
{

    protected $table = 'why_choose_us_bp';

    public function aboutCard()
    {
        return $this->belongsTo(WhyItemsModel::class,'id', 'why_choose_us_bp_id');
    }
}

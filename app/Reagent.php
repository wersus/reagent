<?php

namespace Reagent;

use Illuminate\Database\Eloquent\Model;

class Reagent extends Model
{
    public function getModelTitleAttribute()
    {
        return 'reagent';
    }

    public function getLabelAttribute()
    {
        return __('app.reagent');
    }

    public function getLabel_upperAttribute()
    {
        return __('app.Reagent');
    }
}

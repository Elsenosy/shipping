<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomRequest extends Model
{
    public function container()
    {
        return $this->belongsTo('App\Models\ContainerType', 'container_type_id');
    }

    public function custom()
    {
        return $this->belongsTo('App\Models\CustomType', 'custom_type_id');
    }
}

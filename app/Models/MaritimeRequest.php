<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaritimeRequest extends Model
{
    public function container()
    {
        return $this->belongsTo('App\Models\ContainerType', 'container_type_id');
    }
}

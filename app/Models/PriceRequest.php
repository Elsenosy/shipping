<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceRequest extends Model
{
    public function isSeen(){
        return $this->is_seen == '1' ? true : false;
    }

    public function markAsSeen(){
        if(!$this->isSeen()){
            $this->is_seen = '1';
            $this->save();
        }
    }

    public function details(){
        switch($this->type){
            case 'sea':
                return $this->hasOne('App\Models\MaritimeRequest', 'request_id');
            break;
            case 'air':
                return $this->hasOne('App\Models\AirRequest', 'request_id');
            break;
            case 'custom':
                return $this->hasOne('App\Models\CustomRequest', 'request_id');
            break;
        }
    }
}

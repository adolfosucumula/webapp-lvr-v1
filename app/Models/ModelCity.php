<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelCity extends Model
{
    //
    protected $table ='model_cities';
    protected $primaryKey = 'id_city';

    public function relProvince(){
        return $this->hasOne('App\Models\ModelProvince','id_province','province_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelProvince extends Model
{
    //
    protected $table ='model_provinces';
    protected $primaryKey = 'id_province';
    
    public function relCountry(){
        return $this->hasOne('App\Models\ModelCountry','id_country','country_id');
    }
    public function relCity(){
        return $this->hasMany('App\Models\ModelCity','province_id');
    }
}

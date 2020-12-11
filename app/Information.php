<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'informations';

    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
    );

    public function informationHistories()
    {
        return $this->hasMany('App\InformationHistory');
    }
}

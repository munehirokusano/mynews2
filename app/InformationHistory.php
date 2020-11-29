<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformationHistory extends Model
{
    protected $table = 'information_histories';

    protected $guarded = array('id');

    protected $dates = [ 
        'created_at', 
        'updated_at' 
      ];

    public static $rules = array(
        'information_id' => 'required',
        'edited_at' => 'required',
    );
}

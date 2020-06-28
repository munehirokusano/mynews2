<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PictureTitle extends Model
{
    protected $guarded = array('id');
    
    protected $table = 'picture_title';
    
    public static $rules = array(
        'title' => 'required',
    );
}

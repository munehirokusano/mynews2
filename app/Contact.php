<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'contact_name' => 'max: 30|string' ,
        'contact_email' => 'email' ,
        'contact_text' => 'nullable|max: 20|string',
        'contact_message' => 'string',
    );
}
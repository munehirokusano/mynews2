<?php

namespace App;

/*
|-------------------------------------------------------------------------
| 論理削除の追記
|-------------------------------------------------------------------------
 */
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    // 論理削除
    use SoftDeletes;

    protected $table = 'contacts';
    protected $dates = ['deleted_at'];

    protected $guarded = array('id');

    public static $rules = array(
        'contact_name' => 'max: 30|string' ,
        'contact_email' => 'email' ,
        'contact_text' => 'nullable|max: 20|string',
        'contact_message' => 'string',
    );
}
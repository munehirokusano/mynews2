<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'max: 30|string' ,
        'email' => 'email' ,
        'text' => 'nullable|max: 20|string',
        'message' => 'string',
    );

    // protected $fillable = [
    //      'name', 'email', 'course', 'area', 'message'
    // ];
    // static $courses = [
    //     '新体操コース', '体操コース', '空手コース', 'クラシックバレエコース', 'ダンスコース'
    // ];
    // static $areas = [
    //     '宇都宮市', '小山市', '真岡市', '下野市', '栃木市', 'その他地域'
    // ];
}

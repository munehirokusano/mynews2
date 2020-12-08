<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
    );

    public function courseHistories()
    {
      return $this->hasMany('App\CourseHistory');
    }
}

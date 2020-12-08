<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseHistory extends Model
{
    protected $table = 'course_histories';

    public static $rules = array(
        'course_id' => 'required',
        'edited_at' => 'required',
    );
}

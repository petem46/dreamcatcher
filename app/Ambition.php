<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ambition extends Model
{
    // use SoftDeletes;

    protected $fillable = [
        'introduction', 'experience', 'proudOf', 'user_id', 'student_id'
    ];

    public function student()
    {
        return $this->belongsTo(Student::Class);
    }

}

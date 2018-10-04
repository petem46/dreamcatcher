<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Result extends Model
{
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}

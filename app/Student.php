<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    public function ambitions()
    {
        return $this->hasMany(Ambition::Class);
    }
    public function results()
    {
        return $this->hasMany(Result::Class);
    }
}

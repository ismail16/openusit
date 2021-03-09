<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    protected $guarded = [];
    public function student(){
        return $this->hasOne(Student::class);
    }
}

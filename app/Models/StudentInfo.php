<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    protected $guarded = [];

    public function student(){
        return $this->hasOne(Student::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

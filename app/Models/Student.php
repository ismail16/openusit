<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Batch;

class Student extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function batch(){
        return $this->belongsTo(Batch::class);
    }
    public function studentinfo(){
        return $this->hasOne(StudentInfo::class);
    }
}

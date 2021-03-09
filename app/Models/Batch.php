<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Batch extends Model
{
    public function students(){
        return $this->hasMany(Sutdent::class);
    }
}

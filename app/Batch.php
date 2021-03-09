<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;

class Batch extends Model
{
    public function students(){
        return $this->hasMany(Sutdent::class);
    }
}

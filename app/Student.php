<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'regno','name','father_name','phone_no','gender','birthday','image'
       ];
}

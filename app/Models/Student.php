<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    //
    protected $fillable = ['name','email','student_number','password','department_id'];


   public function department()
   {
        return $this->belongsTo(Department::class);
   }
}

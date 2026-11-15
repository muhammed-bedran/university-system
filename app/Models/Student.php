<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Fortify\TwoFactorAuthenticatable;

class Student extends Authenticatable
{
     use TwoFactorAuthenticatable;
    //
    protected $fillable = ['name','email','student_number','password','department_id'];


   public function department()
   {
        return $this->belongsTo(Department::class);
   }
}

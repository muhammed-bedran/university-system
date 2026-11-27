<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Melbedran\Multira\Traits\Translatable;

class Faculty extends Model
{
    //
    use  Translatable;

    public function getTranslatableAttributes(): array
    {
        return ['name'];
    }
    protected $fillable = [
        'name',
        'code'
    ];
    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}

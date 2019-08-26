<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function customer()
    {
        return $this->hasMany(model1::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function customer()
    {
        return $this->hasmany(model1::class);
    }
}

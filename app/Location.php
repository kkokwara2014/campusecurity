<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    

    public function statement(){
        return $this->hasMany(Statement::class);
    }
}

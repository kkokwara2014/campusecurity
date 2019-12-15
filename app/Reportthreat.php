<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reportthreat extends Model
{
    protected $fillable=['user_id','title','crimescene','reportbody'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

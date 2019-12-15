<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    protected $fillable=['complainant','gender','location_id','regnumber','phone','religion','dateofevent','timeofevent','casetype','user_id','entry'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function location(){
        return $this->belongsTo(Location::class);
    }
}

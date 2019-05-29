<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users(){
        $this->belongsToMany(User::class)->withTimestamps();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class opprtunity extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsToMany(User::class, 'opportunities_users', 'user_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    use HasFactory;

    public function admins(){
        return $this->hasMany("App\Models\Admins", "admins_id");
    }
}

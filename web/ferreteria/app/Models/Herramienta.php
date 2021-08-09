<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model
{
    use HasFactory;

    public function herramientas(){
        return $this->hasMany("App\Models\Herramienta", "herramienta_id");
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    use HasFactory;
    # Defino que tabla voy a administrar con el modelo:
    protected $table = "performances";
    // protected $table = 'habilidades';

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perfil extends Model
{
    use HasFactory;
    # Garantizar que si o si gestione la tabla perfil: 
    protected $table = 'perfil';
}

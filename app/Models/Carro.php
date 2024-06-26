<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        "IdCarro",
        "Marca",
        "Modelo",
        "Ano" ];
}

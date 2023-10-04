<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    use HasFactory;
    protected $fillable = [
        'tmdb_id','titulo','overview','opinion','poster','estreno','estado'
        ];
}

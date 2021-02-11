<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    //use HasFactory;
    protected $fillable = ["titulo","autor","fecha","portada","parrafo1","parrafo2","parrafo3", "parrafo4","foto","imagen1","imagen2","imagen3"];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class scholl extends Model
{
    protected $fillable = ['nombre','clave','control','direccion','municipio'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $fillable = ['name','last_name','level_study','email','password','idmaestro'];
}

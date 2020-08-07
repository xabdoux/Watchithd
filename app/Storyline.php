<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storyline extends Model
{
     protected $fillable = [ 'en',
'fr',
'es',
'ar',
'movies_id'];
}

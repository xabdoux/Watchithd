<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genremovies extends Model
{
     protected $table = ['genremovies'];
     protected $fillable = [ 'genre_id','movie_id' ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
     protected $fillable = ['title',
	 						'country',
	 						'language',
	 						'director',
	 						'producer',
	 						'runtime',
	 						'quality',
	 						'cover',
	 						'trailer','type',
	 						'tags',
	 						'release_date',
	 						'year',
	 						'rates_id' ];
}

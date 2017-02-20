<?php

namespace App;

use App\Traits\ShowsImages;
use Illuminate\Database\Eloquent\Model;

class Library extends Model 
{
	use ShowsImages;
	protected $fillable=[
		'name',
		'slug',
		'address',
		'ward',
		'location',
		'contact_no',
		'contact_name',
		'email',
		'facebook',
		'start_date',
		'description',
		'township_id',
		'services',
		'img_name',
		'img_ext'
	];
}
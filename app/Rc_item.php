<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ShowsImages;

class Rc_item extends Model
{
	use ShowsImages;

    //
	protected $fillable=[
	'name',
	'slug',
	'cat_id',
	'img_name',
	'img_ext',
	'download_link'
	];
}

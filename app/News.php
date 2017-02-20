<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ShowsImages;


class News extends Model
{   
	use ShowsImages;
    //
    protected $fillable=[
    'title',
	 'slug',
	 'description',
	 'event_date',
	 'event_time',
	 'location',
	 'contact',
	 'img_name',
	 'img_ext'
 ];
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book_cat extends Model
{
   protected $table = 'book_cat';
	protected $fillable = ['name'];

}

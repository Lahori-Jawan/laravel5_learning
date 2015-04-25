<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Article extends Eloquent {

	protected $fillable = array( 'title','body' );
	
}

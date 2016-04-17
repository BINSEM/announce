<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announce extends Model
{
    /**
     * Fillable fields
     * 
     * @var array
     */
	protected $fillable = [
	'title',
	'description'
	];
}

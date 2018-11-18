<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class authorModel extends Model
{
	protected $table = 'author';

	public function getAuthor()
	{
	    dd('get author');
	}
}

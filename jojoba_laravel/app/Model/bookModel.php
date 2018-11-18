<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class bookModel extends Model
{
	protected $table = 'book';

	function __construct($nama_buku = null, $author = null)
	{
		$this->id        = random_int(1, 1000);
		$this->author    = $author;
		$this->nama_buku = $nama_buku;
	}

	public function getBook()
	{	
		$table = $this->get($this->_table);

		if ($this->author != null) {
		    dd('authornya '.$this->author);
		} else{
		    dd('buku aja');
		}
	}
}

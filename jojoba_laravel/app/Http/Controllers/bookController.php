<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\bookModel;

class bookController extends Controller
{
	function __construct()
	{
        $this->bookModel        = new bookModel;
        $this->book_with_author = new bookModel();
	}

    public function index(Request $request)
    {
        $this->store(50);
        return view('book.index');
    }

    public function store($jumlah)
    {
        for ($i=1; $i <= $jumlah; $i++) { 
            $book            = new bookModel();
            $book->id        = $i;
            $book->author    = str_random(10);
            $book->nama_buku = 'buku_'.$i;
            $save            = $book->save();
        }
    }
}

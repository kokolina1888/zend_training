<?php 
include 'src/book.php';

use Acme\Book;

class Person {
	public function read(BookInterface $book){
		$book->open();
		$book->turnPage();
	}
}

(new Person)->read(new KindleAdapter(new Kindle));
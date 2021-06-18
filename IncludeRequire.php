<?php 

/**
	@defenisi
		include dan require digunakan untuk memasukkan file php lain didalam file php kita

		Perbedaannnya include dan require terletak pada perilakunya,
			- "include" dan "include_once" berperilaku jika sebuah file yang dimaksudkan tidak ada, maka php akan memberikan warning, tetapi program tetap dieksekusi
			- "require" dan "require_once" berperilaku jika sebuah file yang dimaksudkan tidak ada, maka php akan memberikan fatal error dan menghentikan program
			- "require_once" dan "include_once" dimaksudkan sebuah file hanya bisa dimasukkan sekali, dan apabila file sudah pernah dimasukkan maka akan diabaikan

	@sintaks dan contoh
		include 'filename.php';
		include_once 'filename.php';

		require 'filename.php';
		require_once 'filename.php';

 */

require 'Function.php';
require_once 'Function.php';
require_once 'Variable.php';

include 'Array.php';    
include_once 'Printing.php';

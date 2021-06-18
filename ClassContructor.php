<?php 

/**
	@defenisi
		Class constructor merupakan sebuah magic method dari php yang berperilaku akan selalu dijalankan apabila class diinstansiasi

	@sintaks 
		class ExampleClass 
		{
			public function __construct($param, $param, ...) 
			{
				...
			}
		}

 */

/* Contoh */
class Mobil
{
	public function __construct()
	{
		echo "Ini akan selalu dijalankan";
	}
}

$mobil = new Mobil();

/* Contoh dengan parameter */
class Orang
{
	public function __construct($nama)
	{
		echo "Hi {$nama}, selamat sore !";
	}
}

$orang = new Orang("Rizal");

/* Constructor bisa digunakan untuk membuat nilai pada properti */
class OrangBaru
{
	public $nama;

	public function __construct($nama)
	{
		$this->nama = $nama;
	}

	public function perkenalan()
	{
		echo "Hi nama saya {$this->nama}, senang bertemu dengan mu !"; 
	}
}

$orang2 = new OrangBaru("Meri");
$orang2->perkenalan();

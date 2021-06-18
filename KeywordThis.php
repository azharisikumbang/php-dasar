<?php 

/**
	@defenisi
		Keyword $this merupakan sebuah cara yang digunakan pada PHP untuk menunjuk class itu sendiri. Hal ini sering digunakan untuk memanggil clasnya sendiri, mengakses properti atau method lain yang ada pada class tersebut 

	@sintaks
		class ExampleClass 
		{
			public $var1;

			public someMethod() 
			{
				$this->var1;
			}
		}
 */

class Orang
{
	public $nama = "Henri";
	public $tahunLahir = 1990;

	public function perkenalan()
	{
		echo "Hi nama saya {$this->nama}, senang bertemu dengan mu ! "; 
		echo "Saya berusia {$this->hitungUsia()} tahun";
	}

	public function hitungUsia()
	{
		return date("Y") - $this->tahunLahir;
	}
}

$orang2 = new Orang();
$orang2->perkenalan();
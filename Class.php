<?php 

/**
	@defenisi
		Class merupakan sebuah cetakan atau blueprint yang digunakan untuk menampuang properti dan/atau method di dalamnya.

		Class yang telah diinstansiasi disebuh sebagai Objek

		Properti atau atribut merupakan representasi data pada class, atau mudahnya variabel dalam sebuah class. Contohnya, pada class Mobil mungkin terdapat data nama mobil, jumlah roda, dan sebagainya.


		Method merupakan sebuah tindakan atau kelakuan yang terdapat dalam class. method sendiri bisa disebut fungsi yang terdapat dalam class. Contohnya, dalam Mobil mungkin terdapat kelakuan seprerti menyalakan mesin, menginjak pedal gas dan sebagainya.

	@sintaks 
		class ExampleClass 
		{
			public $var1;

			public someMethod() 
			{
				...
			}
		}

 */

class Mobil 
{
	public $nama = "Toyota";

	public function berjalan()
	{
		echo "Mobil telah berjalan...";
	}
}

// penggunaan
$mobil = new Mobil();
$mobil->berjalan();
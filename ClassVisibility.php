<?php 

/**
	@defenisi
		Class visibility merupakan sebuah istilah yang merujuk kepada keywowrd yang digunakan tentang bagaimana sebuah properti atau method itu diakses

		Visibility atau hak akses ata 3, yaitu public, protected dan private.

		-	Public merupakan visibility yang berperilaku dimana sebuah property atau method akan tersedia secara publik, atau dengan kata lain bisa diakses dari mana saja.
		-	Protected merupakan visibility yang berperilaku dimana sebuah property atau method akan tersedia hanya pada class dan turunannya saja.
		-	Private merupakan visibility yang berperilaku dimana sebuah property atau method akan tersedia hanya pada class nya saja.

	@sintaks 
		class ExampleClass 
		{
			public $publicProperty;
			protected $protectedProperty;
			privatee $privateProperty;

			public function somePublicMethod() 
			{
				...
			}

			protected function someProtectedMethod() 
			{
				...
			}

			private function somePrivateMethod() 
			{
				...
			}
		}

 */

class Mobil
{
	public $nama = "Toyota";
	protected $warna = "Silver";
	private $tahun = 1980;

	public function infomasiMobil()
	{
		$this->infoNamaMobil();
		$this->infoWarnaMobil();
		$this->infoTahunKeluarMobil();
	}

	public function infoNamaMobil() 
	{
		echo "Nama Mobil {$this->nama}";
	}

	protected function infoWarnaMobil()
	{
		echo "Warna Mobil adalah {$this->warna}";
	}

	private function infoTahunKeluarMobil()
	{
		echo "Tahun Keluaran Mobil adalah tahun {$this->tahun}";
	}

}

$mobil = new Mobil();
$mobil->infomasiMobil(); // works
$mobil->infoNamaMobil(); // works 
$mobil->infoWarnaMobil(); // error : protected method tidak bisa dipanggil
$mobil->infoTahunKeluarMobil(); // error : private method tidak bisa dipanggil

class Toyota extends Mobil
{
	public function __construct()
	{
		$this->infomasiMobil(); // works
		$this->infoNamaMobil(); // works 
		$this->infoWarnaMobil(); // works, karena berada pada turunannya
		$this->infoTahunKeluarMobil(); // error : private method tidak bisa dipanggil
	}
}

$toyota = new Toyota();

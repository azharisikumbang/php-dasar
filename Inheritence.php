<?php 

/**
	@defenisi
		Inheritance atau pewarisan merupakan salah satu bagian dalam paradigma pemrograman berorientasi objek. inheritance digunakan untuk merawisi segala hal (propertu dan/atau method) yang ada pada parent class kepada class turunannya.

		Inheritance diwakilkan dengan keyword extends

	@sintaks
		class ParentClass 
		{
			...
		}

		class ExampleClass extends ParentClass 
		{
			...
		}
 */

class Mobil 
{
	public $nama;

	public function __construct($nama) 
	{
		$this->nama = $nama;
	}

	public function berjalan()
	{
		echo "Mobil {$this->nama} sedang berjalan";
	}
}

class Toyota extends Mobil
{
	public function __construct() 
	{
		parent::__construct('Toyota');
	}
}

$toyota = new Toyota();
$toyota->berjalan();
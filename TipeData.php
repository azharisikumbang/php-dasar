<?php
/* Tipe data Scalar */

$nama = 'Catalunya'; // string
$alamat = "Carrer Mas Moreneta, s/n, 08160, Barcelona, Spanyol"; // string
$tikungan = 13; // integer
$panjang = 4.627; // float
$eksis = true; // boolean

// Contoh Sederhana 

echo "<h3>Data Sirkuit $nama</h3>";

echo "<b>Nama</b> : ";
echo $nama;
echo "<br>";

echo "<b>Alamat</b> : ";
echo $alamat;
echo "<br>";

echo "<b>Jumlah Tikungan</b> : ";
echo $tikungan;
echo "<br>";

echo "<b>Panjang Sirkuit</b> : ";
echo $panjang;
echo "km";
echo "<br>";

echo "<b>Eksis</b> : ";
echo $eksis;
echo "<br>";



/* Tipe Data Compund */

$sirkuit = [
	'nama' => 'Catalunya',
	'alamat' => 'Carrer Mas Moreneta, s/n, 08160, Barcelona, Spanyol',
	'tikungan' => 13,
	'panjang' => 4.627,
	'eksis' => true
]; // array
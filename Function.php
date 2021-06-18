<?php 

/**
	@defenisi
		Function merupakan suatu blok kode yang disiapkan terlebih dahulu untuk selanjutnya digunakan kembali dengan cara memanggilnya

		Parameter adalah tempat untuk menyimpan variable pada sebuah function, parameter bisa saja tidak ada, satu atau lebih

		Return adalah sebuah keyword build-in php yang digunakan untuk mengembalikan PHP, jika return telah disebutkan maka program function akan diselesaikan dan nilai setelah return akan dikembalikan

	@sintaks 
		function nama_fungsi($parameter1, $parameter2, ... dan seterusnya) {
			// blok kode ditulis disini
		}

	@contoh
		function pangkat_dua($angka) {
			echo $angka * $angka;
		}

	@penggunaan
		pangkat_dua(5);
		pangkat_dua(10);
		pangkat_dua(33);

 */

/* ===================================================================== */

/* fucntion tanpa parameter */
function nama_saya() 
{
	echo "Levi Dwi Putra";
}
// memanggil nama_saya()
nama_saya(); 

/* function dengan sebuah parameter */
function usia($tahun)
{
	$usia = date("Y") - $tahun;
	echo "usia anda adalah {$usia} tahun";
} 

// penggunaan
usia(2000);

/* function dengan dua parameter */
function pembagian($pembilang, $penyebut)
{
	return $pembilang / $penyebut;
}

// penggunaan
$pembilang = 10;
$penyebut = 5;

echo "hasil dari {$pembilang} dibagi {$penyebut} adalah " . pembagian($pembilang, $penyebut); 


/* function dengan parameter tak hingga */

function jumlahkan(...$params) {
	// $jumlah = array_sum($params);
	$jumlah = 0;
	foreach ($params as $angka) {
		$jumlah += $angka;
	}

	return $jumlah;
}
// penggunaan, untuk parameter bisa ditambahakan berapa saja
echo jumlahkan(10, 20, 30, 40, 50);

/* ======================================= */

// Selengkapnya cek di https://www.php.net/manual/en/language.functions.php
<?php 

// CRUD (Create, Read, Update, Delete)

// Membuat array
$mahasiswa = array('Heri', 'Indah', 'Rizki', 'Putri');
print_r($mahasiswa);

//  				0					1 					2				3
$jurusan = ['Sistem Informasi', 'Teknik Informatika', 'Teknik Elektro', 'Teknik Sipil'];
print_r($jurusan);


// Mengakses array
echo $jurusan[2];

echo "<hr>";

// Mengubah data array
$jurusan[2] = 'Teknik Komputer';
echo $jurusan[2];

echo "<hr>";

// Menambah array
echo "Array awal :";
print_r($jurusan);

// menambahkan cukup dengan array[] tanpa key
$jurusan[] = 'Teknik Industri';
echo "Array baru :";
print_r($jurusan);

echo "<hr>";

// Menghapus array
echo "Array awal :";
print_r($jurusan);

// digunakan unset
unset($jurusan[3]);


echo "Array baru:";
print_r($jurusan);

// Menghitung,
// count(array)
echo "Jumlah array adalah : ";
echo count($jurusan);

// interpreted language 

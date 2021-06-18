<?php 

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

// =====================================================


// lebih kompleks

$klub =[
   'nama'	=> 'Paris St. Germain',
   'negara'	=> 'Prancis',
   'liga'	=> 'Ligue 1',
   'pemain'	=> [
      [
         'nama'		=> 'Keylor Navas',
         'posisi'	=> 'GK',
         'nomor'	=> 1,
         'negara'	=> 'Kosta Rika'
      ],
      [
     
        'nama'		=>'Presnel Kimpembe',
        'posisi'	=>'DF',
        'nomor'		=>3,
        'negara'	=>'Prancis'
      ],
      [
       
        'nama'		=> 'Thilo Kehrer',
        'posisi'	=> 'DF',
        'nomor'		=> 4,
        'negara'	=> 'Jerman'
      ],
     // dan sebagainya
   ]
];

echo 'Citra Febriawirti';
echo '<br>';
echo '2011100032';
echo '<hr>';
echo '<br>';

echo $klub['nama'] ;
echo ' adalah salah satu klub dari ';
echo $klub['negara']; 
echo ' yang bermain di '; 
echo $klub['liga']; 
echo '. Dengan daftar pemain sebagai berikut  '; 
echo $klub['pemain'][0]['nama'] ;
echo ' ,'; 
echo $klub['pemain'][1]['nama'] ;
echo ' ,'; 
echo $klub['pemain'][2]['nama'] ;
echo ' ,'; 
echo ' dan sebagainya';

printf(
  "%s adalah salah satu klub dari %s yang bermain di %s. Dengan daftar pemain sebagai berikut %s, %s, %s dan sebagainya", 
  $klub['nama'],
  $klub['negara'],
  $klub['liga'],
  $klub['pemain'][0]['nama'],
  $klub['pemain'][1]['nama'],
  $klub['pemain'][2]['nama']
);

$variabel = sprintf(
  "%s adalah salah satu klub dari %s yang bermain di %s. Dengan daftar pemain sebagai berikut %s, %s, %s dan sebagainya", 
  $klub['nama'],
  $klub['negara'],
  $klub['liga'],
  $klub['pemain'][0]['nama'],
  $klub['pemain'][1]['nama'],
  $klub['pemain'][2]['nama']
);

echo $variabel;


<?php

// $klub = [

// 	'inggris' => [ 'Liverpool', 'Manchester City', 'Manchester United', 'Chelsea' ],
// 	'spanyol' => [ 'Real Madrid', 'Barcelona', 'Atletico Madrid', 'Sevilla' ],
// 	'italia' => [ 'Juventus', 'Inter Milan', 'Atlanta', 'Lazia' ]

// ];


// print_r($klub);

$klub = [
	'nama' => 'Paris St. Germain', 
	'negara' => 'Prancis',
	'liga' => 'Ligue 1',
	'pemain' => [
		[
			'nama' => 'Keylor Navas',
			'posisi' => 'GK',
			'nomor' => 1,
			'negara' => 'Kosta Rika'
		],
		[
			'nama' => 'Presnell Kimpembe',
			'posisi' => 'DF',
			'nomor' => 3,
			'negara' => 'Prancis'
		],
		[
			'nama' => 'Thilo Kehrer',
			'posisi' => 'DF',
			'nomor' => 4,
			'negara' => 'Jerman'
		],		
	]
];

// print_r($klub);

echo "Daftar Pemain Paris St Germain : ";
echo "<hr>";

echo "Nama : ";
echo $klub['pemain'][0]['nama'];

echo "<br>";
echo "Negara : ";
echo $klub['pemain'][0]['negara'];

echo "<hr>";

echo "Nama : ";
echo $klub['pemain'][1]['nama'];

echo "<br>";
echo "Negara : ";
echo $klub['pemain'][1]['negara'];

echo "<hr>";

echo "Nama : ";
echo $klub['pemain'][2]['nama'];

echo "<br>";
echo "Negara : ";
echo $klub['pemain'][2]['negara'];

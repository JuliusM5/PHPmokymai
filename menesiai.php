<?php

$menesiuVardai = array(
	1 => [ 'pavadinimas' => 'Sausis', 'dienuKiekis' => 31],
	2 => ['Vasaris', 28],
	3 => 'Kovas',
	4 => 'Balandis',
	5 => 'Gegužė',
	6 => 'Birželis',
	7 => 'Liepa',
	8 => 'Rugpjutis',
	9 => 'Rugsėjis',
	10 => 'Spalis',
	11 => 'Lapkritis',
	12 => 'Gruodis'
);

echo $menesiuVardai[1]['dienuKiekis'];

$menesiuDienos = array(
	1 => 31,
	2 => 28,
	3 => 31,
	4 => 30,
	5 => 31,
	6 => 30,
	7 => 31,
	8 => 31,
	9 => 30,
	10 => 31,
	11 => 30,
	12 => 31
);


$dienuKiekis = 0;

foreach ($menesiuDienos as $menesis) {
	$dienuKiekis += $menesis;
}



$rezultatas = [];


foreach($menesiuDienos as $key => $menesis) {
	if(isset($rezultatas[$menesis])) {
		array_push($rezultatas[$menesis],$menesiuVardai[$key]);
	} else {
		// patikriname ar musu masyvo elementas egzistuoja,
		// jei ne, tai jo reiksme priskiriame tusciam masyvui
		$rezultatas[$menesis] = [];
		array_push($rezultatas[$menesis],$menesiuVardai[$key]);
	}
}

foreach ( $rezultatas as $key => $menesiai ) {
	echo "Metuose yra " . count($menesiai) . " menesiai, turintys " . $key . ' d.';

	echo "(";
	foreach ($menesiai as $menesis) {
		echo $menesis . ", ";
	}
	echo ")";
	echo "<br>";
}


foreach ($menesiuVardai as $eilesNumeris => $menesis ) {
	echo $menesis . " yra " . $eilesNumeris . " menesis";
	echo " jis turi " . $menesiuDienos[$eilesNumeris] . "d.";
	echo "<br>";
}


echo "metuose dienu: " . $dienuKiekis;
echo "<br>";




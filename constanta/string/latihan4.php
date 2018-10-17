<?php

class Sapa{var $variable;}
// membuat objek pesan. ini disebut instansiasi
$pesan = new Sapa();
	$pesan->variable="Samudra Yang Luas"; // 	memberikan nilai untuk properti str pada objek pesan
	echo $pesan->variable;
echo '<br>';
	$pesan->variable = 'Sangat dalam';
	echo $pesan->variable;
echo '<br>';
	$pesan->variable = 'Sangat curam';
		echo $pesan ->variable; // mencetak nilainya (pengolahan data)

		?>
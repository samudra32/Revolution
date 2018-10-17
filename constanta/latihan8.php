<html>
<head>

<title> Variable dalam PHP </tile>

<body>
<?php
// variabel bertipe integer
$a="5";
//variabel bertipe real
$b="2.5";
// variabel bertipe string

	$komentar="Selamat fatang samudra ";
	echo ("Nilai variabel a adalah =$a <br>");  //variabel bertipe integer
	echo ("Nilai variabel b adalah =$b <br>");  //variabel bertipe real
	echo ("Nilai variabel komentar adalah =$komentar<br>"); //variabel bertipe string
	$hasil=$a+$b;
	echo ("Hasil jumlah a dan b adalah =$hasil <br>"); // variabel bertipe double
	$tgl =date ("d f y");  // variabel bertipe tanggal
	$nama =" samudra ";
	$garis="------------------------------";
	echo "<br>";
	echo $garis."<br>";
	echo $komentar. " dikelas pemograman". $nama. "Belajar dengan giat broo....<br>";
	echo $garis . "<br>";
	echo "Tanggal ".$tgl;
	?>
	<html>
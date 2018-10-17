<html>
<head>
		<title>Hasil Operasi Aritmatika</title>
</head>
<body>
<?
	if ($operasi==1)
	{
		$c=$a+$b;
		$oper='[a + b]';
	}
	elseif ($operasi==2)
	{
		$c=$a-$b;
		$oper='[a - b]';
	}
	elseif ($operasi==3)
	{
		$c=$a*$b;
		$oper='[a * b]';
	}
	else
	{
		$c=$a/$b;
		$oper='[a / b]';
	}
	echo "Nilai A adalah = $a dan Nilai B adalah = $b<br>";
	echo "Hasil Operasi $oper adalah = $c<br>";
?>
</body>
</html>

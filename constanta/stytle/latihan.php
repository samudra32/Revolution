<html>
<html>
	<title>.:: Konversi Type Data ::.</title>
</head>
<body>
<font face=tahoma size=2>
<?php
	$bayar="500.77 Rupiah";
	print ("Tipe Data String : $bayar <br> ");
	settype ($bayar,"Double");
	print ("Tipe Data Double : $bayar <br  ");
	settype ($bayar,"integer");
	print ("Tipe Data Integer : $bayar <br>  ");

?>
</body>
</html>

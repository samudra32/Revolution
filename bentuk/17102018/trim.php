<html>
<body>

<?php
		// adalah  berguna untuk menghilangkan spasi dan karakter dari suatu variabel di dua sisi, sisi kiri dan sisi kanan.
	$str = "Hello World!";

		echo $str . "<br>";
		echo trim($str,"Hed!");
		// setelah di run maka echo trim akan menhilangkan 2 karakter (Hello menjadi llo dan world! menjadi worl)
?>

</body>
</html>

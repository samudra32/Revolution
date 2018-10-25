<?php
session_start();
?>
<html>
<body>
<?php 
$_SESSION['nama']='Aku Sendiri’';
print_r($_SESSION);
echo '<a href="filedua.php">ke halaman dua</a>';
?>
</html>
</body>

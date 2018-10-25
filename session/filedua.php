Filedua.php

<?php
session_start();
//$_SESSION['name'] = 'halaman kedua';
//print_r($_SESSION);
echo 'Halo '.$_SESSION['nama'].' selamat datang :D di halaman dua';
echo '<a href="filetiga.php">ke halaman tiga</a>';
//session_unset();

?>
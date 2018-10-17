<?php
$aktif = false;
if (date('Y-m-d') < "2018-10-15"){
	$aktif = true;
}

if ($aktif){

 			echo 'aktif';
} 
else {echo ' aktif';}
  // {echo 'tidak aktif';}


 ?>
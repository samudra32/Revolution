<?php
$arr = array('Hello','World!','Beautiful','Day!');

//Join adalah penggabungan table yang dilakukan melalui kolom / key tertentu yang memiliki nilai terkait untuk mendapatkan satu set data dengan informasi lengkap. Lengkap disini artinya kolom data didapatkan dari kolom-kolom hasil join antar table tersebut.

echo join(" ",$arr)."<br>";

echo join("+",$arr)."<br>";

echo join("-",$arr)."<br>"; 

echo join("X",$arr);

?>

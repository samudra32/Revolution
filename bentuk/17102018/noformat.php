<?php

// number format adalah memformat nilai koma desimal, puluhan, ribuan, dan seterusnya.pemfotmatan ini dimaksud kan untuk melihat lebih jelas nilai dari kelipatan 1000,sehingga memudahkan orang yang membacanya.

echo number_format("1000000")."<br>";

echo number_format("1000000",2)."<br>";

echo number_format("1000000",2,",",".");

// ketika di run maka akan jelas nilai pecahan yg jelas.
?>

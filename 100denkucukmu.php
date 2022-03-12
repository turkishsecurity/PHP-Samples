<?php

# if , entered data not big the 100 , print the 100den küçük
# girilen veri 100 den küçükse 100 den küçük yazdırır

error_reporting(0);

echo "<center><h1>PHP Samples / 100den kucukmu kontrolu @XaleTR</h1> ";

echo "<form method='POST'><br>";
echo "<input type='text' name='veri' /><br><br>";
echo "<input type='submit' />";
echo "</form></center>";

$veri = intval($_POST['veri']);

$type = gettype($veri);


if ($veri == "") {

} elseif ($veri <= 100) {
	echo "100den küçük";
} else {
	echo "100den büyük";
}


?>

<?php

# iphone = 0
# samsung = 1
# vestel = 2
# huwai = 3
# yazdırış şekli = $modeller[numara]

$modeller = array("iphone", "samsung", "vestel", "huwai");

echo $modeller[3]; # iphone yazdır

echo "<hr>";

$siralama = array(
    "Enes" => 1,
    "Berkcan" => 2,
    "Ahmet" => 3,
);

echo "Enes : ".$siralama["Enes"];
echo "<br>Berkcan : ".$siralama["Berkcan"];
echo "<br>Ahmet : ".$siralama["Ahmet"];

?>

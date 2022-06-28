<?php
$hari_ini = "selasa";
if ($hari_ini == "senin") {
    echo "I Love Monday";
} else {
    echo "Ini bukan hari senin";
}
echo "<br><br>Ternary operator<br><br>";
$materi = "PHP";
echo ($materi == "PHP") ?
    "Hari ini belajar php" :
    "Hari ini belajar yang lain";

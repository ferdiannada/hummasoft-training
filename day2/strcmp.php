<?php

$passwordasli = "belajarphp";
$passwordinput = "belajarphp";

$output = strcmp($passwordasli, $passwordinput);
echo $output;
if ($output !== 0) {
    echo "password salah";
}else{
    echo "password benar";
}
<?php

function buat_kapital($nama)
{
    return ucwords($nama);
}

$nama_lengkap = buat_kapital("ferdian nada");
echo $nama_lengkap . "<br>";

function perkenalan($nama, $asal)
{
    echo "perkenalkan nama saya " . buat_kapital($nama) . " dari " . $asal;
}

perkenalan("Zainur rofan", "Mumbul Sari");

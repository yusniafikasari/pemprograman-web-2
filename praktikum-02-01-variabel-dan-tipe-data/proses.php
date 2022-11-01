<?php

if ($txtnim = isset ($_POST["txtnim"]) ? $_POST["txtnim"] : "" AND $txtnama = isset ($_POST["txtnama"]) ? $_POST["txtnama"] : "" AND $txtstudi = isset ($_POST["txtpstudi"]) ? $_POST["txtpstudi"] : ""){
    echo "<p>Hai, perkenalkan nama saya adalah : ".$txtnama." dengan NIM : ".$txtnim.". Saya adalah mahasiswa dari program studi :".$txtstudi;
}
else{
    ("isi semua data, '<a href=input.html>Klik disini</a>'untuk kembali");
}
?>
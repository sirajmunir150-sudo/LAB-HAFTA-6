<?php
// Diziyi JSON'a çevirme
$dizi = ["ad" => "Ayşe", "yas" => 25, "meslek" => "Mühendis"];
$json = json_encode($dizi);
echo $json . "<br>";

// JSON'dan diziye çevirme
$json_veri = '{"ad":"Mehmet","yas":30}';
$dizi2 = json_decode($json_veri, true);
echo $dizi2["ad"] . " " . $dizi2["yas"];
?>

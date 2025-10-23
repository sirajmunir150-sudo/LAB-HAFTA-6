<?php
$ogrenciler = [
    ["ad" => "Ali", "puanlar" => [80, 90, 85]],
    ["ad" => "Veli", "puanlar" => [75, 95, 100]],
];

foreach ($ogrenciler as $ogrenci) {
    echo $ogrenci['ad'] . ": ";
    foreach ($ogrenci['puanlar'] as $puan) {
        echo "$puan ";
    }
    echo "<br>";
}
?>

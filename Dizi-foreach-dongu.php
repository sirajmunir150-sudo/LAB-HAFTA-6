<?php
// İndeksli dizi
$meyveler = ["Elma", "Armut", "Muz"];
echo "İlk meyve: " . $meyveler[0] . "<br>";

// İlişkisel dizi
$kisi = [
    "ad" => "Ahmet",
    "soyad" => "Yılmaz",
    "yas" => 30
];
echo $kisi["ad"] . " " . $kisi["soyad"] . ", " . $kisi["yas"] . " yaşında.<br>";

// Foreach ile dizi üzerinde gezinme
echo "<ul>";
foreach ($meyveler as $meyve) {
    echo "<li>$meyve</li>";
}
echo "</ul>";

echo "<br>";
foreach ($kisi as $anahtar => $deger) {
    echo "$anahtar : $deger <br>";
}
?>

<?php
// Parametresiz fonksiyon
function selamVer() {
    echo "Merhaba!<br>";
}
selamVer();

// Parametre alan fonksiyon
function selamIsimle($isim) {
    echo "Merhaba, $isim!<br>";
}
selamIsimle("Ayşe");

// Değer döndüren fonksiyon
function topla($a, $b) {
    return $a + $b;
}
echo "Toplam: " . topla(5, 10);
?>

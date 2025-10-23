<?php
$dosya = "gunluk.txt";
file_put_contents($dosya, "Bugün " . date("d.m.Y H:i:s") . " log kaydı.\n", FILE_APPEND);

if (file_exists($dosya)) {
    echo nl2br(file_get_contents($dosya));
} else {
    echo "Dosya yok.";
}
?>

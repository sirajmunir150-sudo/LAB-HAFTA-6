<?php
echo "Çift sayıları atla:<br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) continue;
    echo "$i<br>";
}

echo "5'i bulunca dur:<br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) break;
    echo "$i<br>";
}
?>

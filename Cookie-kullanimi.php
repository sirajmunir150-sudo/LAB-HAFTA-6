<?php
setcookie("ziyaretci", "Misafir", time() + 3600); // 1 saat geçerli
if (isset($_COOKIE["ziyaretci"])) {
    echo "Hoşgeldin, " . $_COOKIE["ziyaretci"];
} else {
    echo "Cookie bulunamadı.";
}
?>

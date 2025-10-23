<?php
$mesaj = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = htmlspecialchars($_POST["kullanici_adi"]);
    if (empty($ad)) {
        $mesaj = "<p style='color: red;'>Lütfen adınızı giriniz.</p>";
    } else {
        $mesaj = "<p style='color: green;'>Hoş geldin, $ad!</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head><meta charset="UTF-8"><title>Form Örneği</title></head>
<body>
    <?php echo $mesaj; ?>
    <form method="POST" action="">
        <label for="ad">Adınız:</label>
        <input type="text" id="ad" name="kullanici_adi">
        <input type="submit" value="Gönder">
    </form>

    <?php
    if (isset($_GET["urun"])) {
        $urun_adi = htmlspecialchars($_GET["urun"]);
        echo "<p>Ürün: $urun_adi</p>";
    }
    ?>
</body>
</html>

<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=test_db;charset=utf8", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Veri ekleme
    $stmt = $db->prepare("INSERT INTO kullanicilar (ad, email) VALUES (:ad, :email)");
    $ad = "Ali Veli";
    $email = "ali@veli.com";
    $stmt->execute();

    // Veri çekme
    $sorgu = $db->query("SELECT * FROM kullanicilar");
    while ($satir = $sorgu->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: " . $satir['id'] . " - Ad: " . $satir['ad'] . "<br>";
    }
} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
}
$db = null;
?>

<?php
// Bu dosya örnek yapı içindir.
// Gerçek bağlantı bilgilerinizi 'db.php' dosyasına yazın.

try {
    $pdo = new PDO("mysql:host=localhost;dbname=veritabani_adi;charset=utf8", "kullanici_adi", "parola");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Veritabanı bağlantı hatası: " . $e->getMessage());
}
?>

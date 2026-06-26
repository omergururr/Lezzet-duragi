<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezervasyon Onayı - Lezzet Durağı</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <img src="images/logo.jpg" alt="Logo">
    <h1>Lezzet Durağı Restoran</h1>
</header>

<nav>
    <ul>
        <li><a href="index.php">Anasayfa</a></li>
        <li><a href="menu.php">Menü</a></li>
        <li><a href="rezervasyon.php">Rezervasyon Yap</a></li>
        <li><a href="hakkimizda.php">Hakkımızda & Galeri</a></li>
    </ul>
</nav>

<main>
    <section>
        <h2>Rezervasyon Özeti</h2>
        
        <?php
        $ad = $_POST['rez_ad'];
        $tel = $_POST['rez_tel'];
        $tarih = $_POST['rez_tarih'];
        $saat = $_POST['rez_saat'];
        $kisi = $_POST['rez_kisi'];

        echo "<h3>✓ Rezervasyon Başarıyla Alındı!</h3>";
        echo "Müşteri: " . $ad . "<br>";
        echo "Telefon: " . $tel . "<br>";
        echo "Tarih: " . $tarih . "<br>";
        echo "Saat: " . $saat . "<br>";
        echo "Kişi Sayısı: " . $kisi . "<br>";
        ?>
        
    </section>
</main>

<footer>
    <p>© 2026 Lezzet Durağı Restoran</p>
</footer>

</body>
</html>
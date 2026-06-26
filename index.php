<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lezzet Durağı Restoran</title>
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
    <section id="Anasayfa">
        <h2>Anasayfa</h2>
        <p>Lezzet Durağı Restoranımıza hepiniz hoş geldiniz.
        Türk mutfağımızın sevilen yemeklerini sizlerle buluşturuyoruz.
        Aileniz ve arkadaşınızla gönül rahatlığıyla gelebileceğiniz restoranımıza tüm misafirlerimizi bekleriz.</p>
        
        <div class="dukan-galeri">
            <div class="dukan-kart">
                <img src="images/dukkan-resmi.png" alt="Dükkan">
                <p>Restoranımız</p>
            </div>
            <div class="dukan-kart">
                <img src="images/ic.png" alt="İç Mekan">
                <p>Salonumuz</p>
            </div>
            <div class="dukan-kart">
                <img src="images/ic2.png" alt="Masalar">
                <p>İç Mekan</p>
            </div>
            <div class="dukan-kart">
                <img src="images/ic3.png" alt="Tasarım">
                <p>Konforumuz</p>
            </div>
            <div class="dukan-kart">
                <img src="images/masa.png" alt="Bahçe">
                <p>Bahçemiz</p>
            </div>
            <div class="dukan-kart">
                <img src="images/mutfak.png" alt="Mutfak">
                <p>Mutfağımız</p>
            </div>
        </div>
    </section>

    <section id="Iletisim">
        <h2>İletişim</h2>
        <p><b>Adres: </b> Küçükçekmece / İstanbul / Türkiye</p>
        <p><b>Telefon: </b> 0541 108 45 44</p>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $adsoyad = $_POST['adsoyad'];
            echo "Teşekkürler " . $adsoyad . ", mesajınız başarıyla bize ulaştı!<br><br>";
        }
        ?>

        <form action="index.php" method="POST">
            Ad Soyad: <input type="text" name="adsoyad"><br><br>
            
            Email: <input type="email" name="email"><br><br>
            
            Bize Mesajınız:<br>
            <textarea name="mesaj" rows="5"></textarea><br><br>
            
            <button type="submit">Gönder</button>
        </form>
    </section>
</main>

<footer>
    <p>© 2026 Lezzet Durağı Restoran</p>
</footer>

</body>
</html>
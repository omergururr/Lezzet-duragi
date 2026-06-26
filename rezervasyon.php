<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezervasyon Yap - Lezzet Durağı</title>
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
        <h2>Masa Rezervasyonu</h2>
        <p>Lütfen aşağıdaki formu eksiksiz doldurunuz.</p>
        
        <form action="onay.php" method="POST">
            İsim: <input type="text" name="rez_ad"><br><br>

            Telefon: <input type="tel" name="rez_tel" placeholder="05xx xxx xx xx"><br><br>

            Tarih: <input type="date" name="rez_tarih"><br><br>

            Saat: <input type="time" name="rez_saat"><br><br>

            Kişi Sayısı: 
            <select name="rez_kisi">
                <option>1 Kişi</option>
                <option>2 Kişi</option>
                <option>3 Kişi</option>
                <option>4 Kişi</option>
                <option>5+ Kişi</option>
            </select>
            <br><br>

            <button type="submit">Rezervasyonu Tamamla</button>
        </form>
    </section>
</main>

<footer>
    <p>© 2026 Lezzet Durağı Restoran</p>
</footer>

</body>
</html>
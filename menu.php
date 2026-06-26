<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menü - Lezzet Durağı</title>
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
    <section id="Menu">
        <h2>Menü</h2>
        
        <?php
        $yemekler = [
            ["ad" => "Mercimek Çorbası", "kategori" => "Çorba", "fiyat" => "70 TL"],
            ["ad" => "Ezogelin Çorbası", "kategori" => "Çorba", "fiyat" => "70 TL"],
            ["ad" => "Tavuk Şiş", "kategori" => "Ana Yemek", "fiyat" => "220 TL"],
            ["ad" => "Adana-Urfa Kebap", "kategori" => "Ana Yemek", "fiyat" => "330 TL"],
            ["ad" => "Lahmacun", "kategori" => "Ana Yemek", "fiyat" => "140 TL"],
            ["ad" => "Fırın Sütlaç", "kategori" => "Tatlı", "fiyat" => "90 TL"],
            ["ad" => "Künefe", "kategori" => "Tatlı", "fiyat" => "160 TL"],
            ["ad" => "Şekerpare", "kategori" => "Tatlı", "fiyat" => "110 TL"],
            ["ad" => "Ayran", "kategori" => "İçecek", "fiyat" => "40 TL"],
            ["ad" => "Kola", "kategori" => "İçecek", "fiyat" => "50 TL"],
            ["ad" => "Fanta", "kategori" => "İçecek", "fiyat" => "50 TL"],
            ["ad" => "Şalgam", "kategori" => "İçecek", "fiyat" => "50 TL"],
            ["ad" => "Su", "kategori" => "İçecek", "fiyat" => "20 TL"]
        ];
        ?>

        <table border="1">
            <tr>
                <th>Yemek Çeşitleri</th>
                <th>Kategoriler</th>
                <th>Fiyat Listesi</th>
            </tr>
            
            <?php
            foreach ($yemekler as $yemek) {
                echo "<tr>";
                echo "<td>" . $yemek['ad'] . "</td>";
                echo "<td>" . $yemek['kategori'] . "</td>";
                echo "<td>" . $yemek['fiyat'] . "</td>";
                echo "</tr>";
            }
            ?>
            
        </table>
    </section>
</main>

<footer>
    <p>© 2026 Lezzet Durağı Restoran</p>
</footer>

</body>
</html>
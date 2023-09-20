<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content="html; charset=UTF-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ornek Kodlar</title>
</head>
<body>
    <?php
    $Isim = $_COOKIE["KullaniciAdi"];
    $Soyisim = $_COOKIE["KullaniciSoyadi"];

    echo "Merhaba" . $Isim . " " . $Soyisim . " nasilsin ? <br /><br />";
    ?>

    <a href="sonuc.php">Forma'a geri don</a>
</body>
</html>
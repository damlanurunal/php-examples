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
    $GelenAdi     = $_POST["Adi"];
    $GelenSoyadi  = $_POST["Soyadi"];
    $YasamSuresi  = time() + ((60 * 60) * 24);

    setcookie("KullaniciAdi",$GelenAdi ,$YasamSuresi); 
    setcookie("KullaniciSoyadi",$GelenSoyadi,$YasamSuresi);

    ?>

    <a href="kim.php">Mesaji gonder</a>
</body>
</html>
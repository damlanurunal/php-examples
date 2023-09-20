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
    $_SESSION["KullaniciAdi"] = "Volkan";
    $_SESSION["KullaniciSoyadi"] = "Alakent";
    $_SESSION["KullaniciEmail"] = "info@extraegitim.com";


    //Session tanimlamada dizilerin kullanimi
    $_SESSION["Kullanici"] = array("Adi" => "Volkan", "Soyadi" => "Alakent" , "Email" => "info@extraegitim.com");
    



    ?>
    <a href="oku.php">Session'lari oku</a>
</body>
</html>
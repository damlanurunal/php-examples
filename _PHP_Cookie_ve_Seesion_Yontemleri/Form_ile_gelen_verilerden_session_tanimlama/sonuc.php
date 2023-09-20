<?php
require_once("ayar.php");
?>
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
    $GelenKullaniciAdi          = $_POST["KullanicininAdi"];
    $GelenKullaniciSifresi      = $_POST["KullanicininSifresi"];

    if(($GelenKullaniciAdi!="") and ($GelenKullaniciSifresi!="")){
        $_SESSION["Adi"]        = $GelenKullaniciAdi;
        $_SESSION["Sifresi"]    = $GelenKullaniciSifresi;

        echo "Merhaba " . $GelenKullaniciAdi . "<br />";
        echo "<a href='cikis.php'>Cikis yap</a>";
    }else{
        echo "Formda bos alan birakmayiniz";
        echo "<a href='index.php'>Forma don</a>";
    }



    ?>
    
</body>
</html>
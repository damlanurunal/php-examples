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
    $YasamSuresi = time() + (60 * 5); 
    setcookie("KullaniciAdi", "Volkan",$YasamSuresi);  //Beliritlecek olan degerlerle cookie olusturmak veya silmek icin kullanilir
    setcookie("KullaniciSoayadi","Alakent",$YasamSuresi);
    setcookie("EgitimAdi","A'dan Z'ye PHP Egitim Seti",$YasamSuresi);

    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";

   

    echo "Kullanici Adi : " . $_COOKIE["KullaniciAdi"] . "<br />";
    echo "Kullanici Soyadi : " . $_COOKIE["KullaniciSoyadi"] . "<br />";
    echo "Egitimin Adi : " . $_COOKIE["EgitimAdi"] . "<br />";


    //Cookie tanimlama islemlerinde dizilerin kullanimi
    setcookie("Kullanici[Adi]", "Volkan",$YasamSuresi); 
    setcookie("Kullanici[Soyadi]","Alakent",$YasamSuresi);
    setcookie("Kullanici[EmailAdresi]","info@extraegitim.com",$YasamSuresi);

    setcookie("Sepet[ID]",5,$YasamSuresi); 
    ?>
</body>
</html>
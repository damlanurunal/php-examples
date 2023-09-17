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

    $isim = "Volkan";
    // & işareti koyarsak ana değişkenin yaşadığı değişimlerden referans değişkeni de etkilenir
    $isim2 = &$isim; 
    
    echo $isim;
    echo "<br /><br />";
    echo $isim2;
    echo "<br /><br />";
   
    $isim = "Melih";
    echo $isim;
    echo "<br /><br />";
    echo $isim2;
    echo "<br /><br />";
   
    //Değişken değişken
    $deger = "Volkan";
    $$deger = "Alakent";
    
    echo $deger;
    echo "<br /><br />";
    echo $$deger;
    echo "<br /><br />";

    // bir önce aynı isimle tanımlanmış değişkenin içerdiği veri adını değişken gibi kabul edip çağırabiliriz 
    echo $deger;
    echo "<br /><br />";
    echo $Volkan;
    echo "<br /><br />";

    //Birleştirme
    $sonuc = $isim . " " . $deger;
    echo $sonuc;

    echo $deger[0];
    ?>
</body>
</html>
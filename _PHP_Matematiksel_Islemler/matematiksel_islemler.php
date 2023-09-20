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

    //Toplama
    echo "10 +70 ";
    echo 10+70;

    $Deger1 = "20";  // HATA, matematiksel islemlerde double,float veya int kullanilmalidir 
    $deger2 = "10";

    $sonuc = $deger2 + $Deger1;
    echo $sonuc;

    $Deger1 = 10;
    $Deger1 += 100;  // degiskene sagdaki kadar deger atar
 

    //Cıkarma
    $Deger1 = 5; 
    $ekdeger = 20.12;

    $sonuc = $deger2 - $ekdeger;
    echo $sonuc;

    $deger2 -= $ekdeger; // degerden ek deger cikartilip sonuc degere yazdirirlir


    //Carpma
    $sonuc = 9 * 10;
    echo $sonuc;

    $deger2 *= $ekdeger; //iki degisken carpilip sonuc soldakine yazilir


    //Bolme 
    $sonuc = 100 /2;
    echo $sonuc ."<br />";
    $ekdeger = 3.33;

    $sonuc /= $ekdeger; //  soldaki degisken sagdakine bolunup sonuc sagdaki degiskene yazilir

    //Kalan
    $sonuc = 100 /2;
    $sonuc %=$ekdeger;  //   soldaki degisken sagdakine bolunup kalan soldaki degiskene yazilir
    echo $sonuc;

    // islem oceliklerine gore hesaplamalar
    echo (((5 + 300) - 55) * 4) / 100 . "<br />";  
    echo 5 + 300 - 55 * 4 / 100 . "<br />";

    //arttirma ve azaltma islemleri
    $Sayi = 1;
    echo $Sayi . "<br />";
    $Sayi--; 
    echo $Sayi . "<br />";
    $Sayi++;
    echo $Sayi . "<br />";
    ++$Sayi;
    echo $Sayi . "<br />";
    --$Sayi;
    echo $Sayi . "<br />";
    

    ?>
</body>
</html>
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
    $Deger = "Volkan";
    $Sonuc = ($Deger == "Volkan") ? "Dogru" : "Yanlıs";
    echo $Sonuc;
    echo ($Deger == "Volkan") ? "Dogru" : "Yanlıs";

    
    $GelenIsimDegeri   = $_GET["KullaniciIsmi"] ?? "HATA";
    $GelenSoyisimDegeri  = $_POST["KullaniciSoyismi"] ?? "HATA";

    echo "Formdan gelen Isim degeri :" . $GelenIsimDegeri . "<br />";
    echo "Formdan gelen Isim degeri :" . $GelenSoyisimDegeri . "<br />";

    echo "Onur Tatlı<br />";
    goto Egitimci;  //belirtilen satıra atlama kosulunu saglamak icin kullanilir
    echo "Mehmet Gümüs<br />";
    echo "Volkan Alakent<br />";

    Egitimci:
    echo "Umut Konur<br />"

    //Istisnalar ve Kullanımları

    try{
        $Sayi1 = 100;
        $sayi2 = 0;
        if($Sayi2){
            throw new Exception("İşlemde bir hata oluştu");
        }

        echo "Sonuc : " . $sayi1 / $Sayi2;
    }catch(Exception $Sonuc){
        echo $Sonuc->getMessage();
    }

    error_reporting(E_PARSE);
    error_reporting(E_ALL ^ E_WARNING);
    trim();

    echo $degisken ;
    @$ Deneme ="Volkan";
    @trim();



    ?>
</body>
</html>
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
    $Veri = "Volkan";
    $Turu = gettype($Veri); //degisken iceriginin veri turunu bularak geriye dondurur

    echo "Veri Türü :" . $Turu;

    class Deger{
        public $sayi = "8";
    }
    $Islem = new Deger;
    $Sonuc  = gettype($Islem);

    echo $Islem->sayi ."<br />";

    echo "Veri Türü : " . $Sonuc ."<br />";

    settype($sayi, "integer"); // veri türünü belirlemek,degistirmek icin
    $sonVeriTuru = gettype($sayi);
    echo "Veri Türü :" . $sonVeriTuru;

    $DegerBir         = "5";
    $DegerBirVeriTuru = gettype($DegerBir);

    echo "Birinci Veri Icerigi " . $DegerBir . "<br />";
    echo "Birinci Veri Türü" . $DegerBirVeriTuru . "<br /><br />";

    $DegerIki         = (string) 65.98;
    $DegerIkiVeriTuru = gettype($DegerIki);

    echo "Ikinci Veri Icerigi " . $DegerIki . "<br />";
    echo "Ikinci Veri Türü" . $DegerIkiVeriTuru . "<br /><br />";
    echo "Icerik " . intval($DegerIki) . "<br />";  //iceriginin integer tam sayi degerini dondurur

    $DegerIki = null;
    echo "Icerik " . boolval($DegerIki) . "<br />";  //iceriginin boolean degerini dondurur
    

    function Deneme(string $Isim, string $Soyisim, int $yas):array{
        $Birlestir = array($Isim, $Soyisim, $yas);
        return $Birlestir;
    }

    $Sonuc2 = Deneme("Volkan", "Alakent",38);
    echo "<pre>";
    print_r($Sonuc2);
    echo "</pre>";

    var_dump($DegerBir); //degiskene ait tum yapiya ve bilgilere ulasmak icin kullanilir

    $Bilgiler = serialize($Sonuc2); // saklanabilir vri turune donusturerek donnusturdugu degeri geri dondurur
    echo $Bilgiler;
    $geriDonusturme = unserialize($Bilgiler); //serialize ile uretilmis saklanabilir degeri eski orijinal haline dondurup geriye doner
    echo "<pre>";
    print_r($geriDonusturme);
    echo "</pre>";

    ?>
</body>
</html>
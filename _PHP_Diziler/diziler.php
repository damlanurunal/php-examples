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
    $Isimler = array("renk" => "Mavi","Melih","Arda","Zehra");
    echo "<pre>";
    print_r($Isimler);
    echo "<pre><br /><br />";
    echo $Isimler["renk"] . "<br />";
    echo $Isimler[1] . "<br />";
    echo $Isimler[2] . "<br />";

    //sabit dizi oluşturma
    const DEGERLER = array("Volkan", "Hakan","Zehra");
    echo "<pre>";
    print_r(DEGERLER);
    echo "<pre><br /><br />";
    

    define("DEGERLER2" , array("PHP"=>"Volkan", "Hakan","Zehra"));
    echo DEGERLER2[1];
    echo DEGERLER2["PHP"];

    //degisken yapilarini kullanarak dizi tanimlama
    $Isimler2["PHPEgitmeni"] = "Volkan";
    $Isimler2[] = "Melih";
    $Isimler2[] = "Ada";
    echo "<pre>";
    print_r($Isimler2);

    //dizi icerisinde degisken ve sabit tanimlama
    $ad                = "Melih";
    $soyAd             = "Korkmaz";

    define("ESYA","Masa");
    define("ARAC","Vapur");

    const RENK        = "Yesil";
    const YAZILIMDILI = "PHP";

    $DEGERLER3 = array($ad,$soyAd,ESYA,ARAC,RENK, YAZILIMDILI,"Aktivite" => "Sinema");
    
    echo "<pre>";
    print_r($DEGERLER3);
    echo "<pre>";

    //dizinin degiskenini önceden tanimlarak sonra veri ekleme
    $Isimler3       = array();
    $Isimler3["HTML"]     = "Melih";
    $Isimler3["PHP"]     = "Ada";


    //diziye sonradan veriler ekleme
    $Isimler3["PYTHON"]     = "Kubra";
    $Isimler3["JAVA"]     = "Nisa";

    //bir indise ait verinin degistirimesi
    $Isimler3["PHP"]    = "Onur";
    $DEGERLER3["Aktivite"] = "Yuzme";

    echo "<pre>";
    print_r($DEGERLER3);
    echo "<pre>";

    echo "<pre>";
    print_r($Isimler3);
    echo "<pre>";

    //bir diziyi baska degiskene aktarma
    $aktarma        = $Isimler3;

    echo "<pre>";
    print_r($aktarma);
    echo "<pre>";

    //birden fazla diziyi bir degiskene aktarma
    $sonuc      = $Isimler3 + $DEGERLER3;

    echo "<pre>";
    print_r($sonuc);
    echo "<pre>";

    //ic ice cok boyutlu dizi olusturma
    $icIceDizi  = array("Volkan","Hakan", array("Mavi","kırmızı","Sarı","Siyah",array("Masa","Sandalye","Sehpa")),"Onur");

    echo "<pre>";
    print_r($icIceDizi);
    echo "<pre>";

    echo $icIceDizi[0] . "<br />";
    echo $icIceDizi[2][0] . "<br />";
    echo $icIceDizi[2][4][1] . "<br />";
    

    ?>
</body>
</html>
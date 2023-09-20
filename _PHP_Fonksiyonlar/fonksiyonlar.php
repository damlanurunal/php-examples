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

    //Fonksiyon tanimlama ve cagirma
    function Extra_Egitim_ve_Egitmen_Adi(){
        echo "Extra Egitim - Volkan Alakent ";
    }
    Extra_Egitim_ve_Egitmen_Adi();

    //kapsama alani ve global ifadesinin kullanimi
    $GLOBALS["Isim"] = "VolkanAlakent";
    $Ad = "Volkan";
    function Yaz(){
        echo $GLOBALS["Isim"];
    }
    Yaz();

    function Yaz2(){
        global $Ad;
        echo $Ad;
    }
    Yaz2();

    //anonim fonksiyon tanimlama ve cagirma
    $Islem  = array(
        "Volkan",
        "Hakan",
        function (){
            $yaz = "Extra egitim";
            return $yaz; //fonsiyondan deger dondurmek icin kullanlir
        },
        "Onur"
    );

    $dondur = $Islem[2]();
    echo $dondur;

    //return kullanarak birden fazla deger dondurme
    function diziDondur(){
        $Isim = "Volkan";
        $Soyisim = "Alakent";

        return array( $Isim,$Soyisim); 
    }
    $sonuc  = diziDondur();
    
    echo "<pre>";
    print_r($sonuc) ;
    echo "</pre><br />";

    
    function Islemler ($a ,$b){
        $gelenIsim = $a;
        $gelenSoyisim = $b;
        $GelenParametreSayisi = func_num_args();
        $gelenParametreDegerleri = func_get_args(); // gelen parametrelerden dizi olusturmaya yarar
        
        echo "<pre>";
        print_r($gelenParametreDegerleri) ;
        echo "</pre><br />";
        
        echo $gelenIsim. " ". $gelenSoyisim;
    }
    Islemler("Volkan","Alakent");

    //herhangi bir degiskeni kullanarak fonksiyon calistirma
    $Calistir = "Deneme";

    function Deneme($deger){
        echo $deger;
    }

    $Calistir("Volkannn");

    //otomatik calisan fonksiyon tanimlama 
    $IslemYap = function(){
        echo "Umut konur";
    };

    $IslemYap();

    //otomatik calisan fonksiyona parametre tanimlama
    ($IslemYap = function($Isim,$Soyisim){
        echo $Isim, $Soyisim;
    })("Volkan","Alakent");

    //Recursive Fonksiyon
    $Sayi =1;
    function IslemmYap($Sayi){
        if($Sayi<=25){
            echo $Sayi . "<br />";
            IslemmYap($Sayi+1);
        }

        static $rakam = 0;
        $rakam += 1;
        echo $rakam;
    }

    IslemmYap(10);
    IslemmYap(5);

    //Yield kullanimi
    function Islem($Baslangic, $Bitis){
        while($Baslangic<=$Bitis){
          yield $Baslangic;
          $Baslangic++;
        }
    }
    $Sonuc = Islem(1,100);

    foreach($Sonuc as $Deger){
        echo $Deger . " ";
    }

    echo "<br /><br />";

    $BellekTuketimi = memory_get_usage();
    echo "Bellek Tuketimi" . $BellekTuketimi;




   


    ?>
</body>
</html>
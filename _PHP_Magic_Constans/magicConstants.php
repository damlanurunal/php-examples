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

   
    echo "Ilgili kodun bulundugu satir numarasi:". __LINE__;

    $satirNo = __LINE__;
    echo "Ilgili kodun bulundugu satir numarasi:". $satirNo;

    $Dizin = __DIR__;
    echo $Dizin;

    $TamDosyaYolu = __FILE__;
    echo $TamDosyaYolu;


    function Deger(){
        // fonksiyonun adini verir
        echo __FUNCTION__;  
    }
    Deger();

    class Deger2{
        function deneme(){
            //bulundugu sinifin ismini verir
            echo __CLASS__;
        }
    }
    $Islem = new Deger2;
    $Islem->deneme();


    class ExtraEgitim{
        function Ornek1(){
            //bulundugu sinifin metod adini verir
            echo __METHOD__;
        }
    }
    $Islem2 = new ExtraEgitim;
    $Islem2->Ornek1();

    trait Ozellik1{
        function YazBir(){
           // özellik adini verir 
            echo __TRAIT__;
        }
    }
    class ExtraEgitim2{
        use Ozellik1;
    }

    $islem = new ExtraEgitim2;
    $islem->YazBir();

    
    namespace Projeler;
    //namespace adini verir
    echo __NAMESPACE__;

    ?>

    
</body>
</html>
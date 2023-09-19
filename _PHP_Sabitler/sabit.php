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
    define("ISIM", "Valkan Alakent");
    echo ISIM ;
    
    const _ISIM  = "Volkan Alakent";
    echo _ISIM; 
    
    //sabitler sayı ile başlamaz

    define ("I_S_I_M_111", "Volkan Alakent");
    echo I_S_I_M_111;

    /* define ("IS~IM", "Volkan Alakent"); // НАТА, Sabit isimleri icerisinde ozel karakterler kullani lamaz.
    echo IS~IM;  */ 

    /* 
    const ECHO = "Volkan Alakent"; sabit isimleri PHP tarafından kullanılmakta olan isimler tanımlar kullanılamaz
    echo ECHO ;
    */

  
    function Deneme(){
        // const _ISIM2  = "Volkan Alakent";  const ile local alanda tanımlanırsa çalışmaz
        define("_ISIM2", "Valkan Alakent");
    }
    Deneme();
    echo _ISIM2;

    $Deger = "Melih Korkmaz";
    $Deger2 = "Ali Arda";
    define("isimm", $Deger);
    // const isimm =  $Deger;  değişken kullanılmaz
    echo isimm;
    define("isim2", $Deger ." ". $Deger2);
    echo isim2;
    
    //sabit içine sabit tanımlama
    define("VERİ", isim2);
    echo VERİ;

    const VERİ2  = VERİ;
    echo VERİ2;

    //sabit içinde istenilen karaktere ulaşma
    echo VERİ[0];


    ?>
</body>
</html>
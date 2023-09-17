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
     
    function Deneme(){
        $GLOBALS["isim"] = "Rüya Erdem"; // isim adında global değişken
    }
    Deneme();
    echo $isim;
    echo $GLOBALS["isim"];

    //Global alandan local alana alma
    $isim2 = "Melih Korkmaz";

    function Deneme2(){
        global $isim2;  //global alandaki isim2 adlı değişkeni buraya çağır
        echo $isim2;
        echo $GLOBALS["isim2"];

    }
    Deneme2();
    ?>
</body>
</html>
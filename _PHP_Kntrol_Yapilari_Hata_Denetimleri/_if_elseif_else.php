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
    if(5 > 10){
        echo "if bloğu geçerli oldu ve çalişti";
    }elseif(8>5){
        echo "elseif bloğu geçerli oldu ve çalişti";
    }

    $AyAdi = "Ağustos";

    if($AyAdi == "Ocak"){
        echo "Ocak";
    }elseif($AyAdi == "Ağustos"){
        echo $AyAdi;
    }
    if(($AyAdi=="Mart") or ($AyAdi=="Nisan") or ($AyAdi=="Mayıs")){
        echo "Ilkbahar";
    }elseif(($AyAdi=="Haziran") or ($AyAdi=="Temmuz") or ($AyAdi=="Ağustos")){
        echo "Yaz";
    }elseif(($AyAdi=="Eylül") or ($AyAdi=="Ekim") or ($AyAdi=="Kasim")){
        echo "Sonbahar";
    }elseif(($AyAdi=="Aralik") or ($AyAdi=="Ocak") or ($AyAdi=="Şubat")){
        echo "Kiş";
    }else{
        echo "Girilen deger ay degildir.";
    }

    $saat = 20;
    if(($saat >=10) and ($saat<=6)){
        echo "iyi geceler";
    }elseif(($saat >6) and ($saat<=9) ){
        echo "Günaydın";
    }
    
    $saat1 = 1;
    if(($Saat>=0) and ($Saat<=6)){
        if($Saat==0){
            echo "Şuanda saat {$Saat}";
        }elseif($Saat==1){
            echo "Şuanda saat {$Saat}";
        }

    }

    ?>
</body>
</html>
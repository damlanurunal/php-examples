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
    $Deger = 10;

    switch($Deger){
        case $Deger > 20:
            echo "Kod blogu çalisti";
        break;
        case $Deger > 5:
            echo "2.kod blogu çalisti";
        break;
        default:
            echo "koşul gecersiz oldu kod blogu calisti";
            
    }

    $Saat = 10;

    switch($Saat){
        case (($Saat >= 0) and ($Saat <= 6)):
            case $Saat == 0:
                echo "İyi geceler, suan saat 00.00";
            break;
            case $Saat == 1:
                echo "İyi geceler, suan saat 01.00";
            break;
            case $Saat == 2:
                echo "İyi geceler, suan saat 02.00";
            break;
            case $Saat == 3:
                echo "İyi geceler, suan saat 03.00";
            break;
            case $Saat == 4:
                echo "İyi geceler, suan saat 04.00";
            break;
            case $Saat == 5:
                echo "İyi geceler, suan saat 05.00";
            break;
            case $Saat == 6:
                echo "İyi geceler, suan saat 06.00";
            break;
            default:
                echo "Bilinmeyen hata";

        break;
        case (($Saat > 6) and ($Saat <= 9)):
            case $Saat == 7:
                echo "Günaydın, suan saat 07.00";
            break;
            case $Saat == 8:
                echo "Günaydın, suan saat 08.00";
            break;
            case $Saat == 9:
                echo "Günaydın, suan saat 09.00";
            break;
            default:
                echo "Bilinmeyen hata";
        break;
        case (($Saat > 9) and ($Saat <= 17)):
            case $Saat == 10:
                echo "İyi günler, suan saat 10.00";
            break;
            case $Saat == 11:
                echo "İyi günler, suan saat 11.00";
            break;
            case $Saat == 12:
                echo "İyi günler, suan saat 12.00";
            break;
            case $Saat == 13:
                echo "İyi günler, suan saat 13.00";
            break;
            case $Saat == 14:
                echo "İyi günler, suan saat 14.00";
            break;
            case $Saat == 15:
                echo "İyi günler, suan saat 15.00";
            break;
            case $Saat == 16:
                echo "İyi günler, suan saat 16.00";
            break;
            case $Saat == 17:
                echo "İyi günler, suan saat 17.00";
            break;
            default:
                echo "Bilinmeyen hata";
        break;
        case (($Saat > 17) and ($Saat <= 23)):
            case $Saat == 18:
                echo "İyi akşamlar, suan saat 18.00";
            break;
            case $Saat == 19:
                echo "İyi akşamlar, suan saat 19.00";
            break;
            case $Saat == 20:
                echo "İyi akşamlar, suan saat 20.00";
            break;
            case $Saat == 21:
                echo "İyi akşamlar, suan saat 21.00";
            break;
            case $Saat == 22:
                echo "İyi akşamlar, suan saat 22.00";
            break;
            case $Saat == 23:
                echo "İyi akşamlar, suan saat 23.00";
            break;
            case $Saat == 23:
                echo "İyi akşamlar, suan saat 23.00";
            break;
            default:
                echo "Bilinmeyen hata";
        break;
        default:
            echo "Saat dilimi değil";   
    }

    $Deger = 8;

    switch($Deger):
        case $Deger >8:
            echo "Kod bloğu calisti";
        break;
        case $Deger <8:
            echo "2.Kod bloğu calisti";
        break;
        case $Deger =8:
            echo "Kod bloğu calisti";
        break;
        default:
          echo "Koşul gecersiz";
        endswitch;


        
    




    ?>
</body>
</html>
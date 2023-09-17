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
    echo <<<END
    Merhabalar
    Extra Eğitim Türkiye'nin yeni eğitim sitesi 
    END;

    echo "Extra Eğitim"," ", "Türkiye'nin"," ", 'yeni eğitim sitesi ';

    echo 'Extra Eğitim Türkiye\'nin yeni eğitim sitesi ';  /*  \ işareti ondan sonra gelen ilk karakteri görmemesini sağlar */
    echo "Extra Eğitim Türkiye'nin yeni eğitim sitesi "; 
    echo "Extra Eğitim Türkiye\"nin yeni eğitim sitesi ";

    $degisken= "Extra Eğitim";
    echo "Extra $degisken Türkiye'nin yeni eğitim sitesi "; 
    echo 'Extra $degisken Türkiye\'nin yeni eğitim sitesi ';  // Tek tırnak kullanıldığında değişken görülemez
    echo "Extra {$degisken} Türkiye'nin yeni eğitim sitesi "; 
    echo ("Extra Eğitim Türkiye'nin yeni eğitim sitesi ");  // tek fark yapısı fonksiyon
    $deneme = "Deneme Metni"
    ?>
    <!-- Kısa Tag -->
    <?=$deneme?>


</body>
</html>
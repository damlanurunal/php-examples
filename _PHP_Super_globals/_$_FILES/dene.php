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
    $gelenDosya = $_FILES["Dosya"];

    
    echo"<pre>";
    print_r($gelenDosya);   
    
    // Bilgilere tek tek de erişebiliriz
    echo "Gelen Dosyanin adi:" . " " . $_FILES["Dosya"]["name"]."<br />";
    echo "Gelen Dosyanin MIME türü:" . " " . $_FILES["Dosya"]["type"]."<br />";
    echo "Gelen Dosyanin Temp Dizini:" . " " . $_FILES["Dosya"]["temp_name"]."<br />";
    echo "Gelen Dosyanin Boyutu:" . " " . $_FILES["Dosya"]["size"]."<br />";  
    echo "Gelen Dosyanin Hata Kodu Degeri:" . " " . $_FILES["Dosya"]["error"]."<br />";


    ?>
</body>
</html>
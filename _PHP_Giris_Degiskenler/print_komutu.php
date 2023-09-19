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
    print "Volkan Alakent";
    print 'Volkan Alakent';
    print "Türkiye'nin güzellikleri";
    print 'Türkiye\'nin güzellikleri';
    print "Türkiye\"nin güzellikleri";
    $deneme = "güzellikleri";
    print "Türkiye'nin $deneme";
    print "Türkiye'nin {$deneme}";

    print <<<END
    Merhabalar
    Extra Eğitim Türkiye'nin yeni eğitim sitesi 
    END;

    print(666);
    ?>
    
</body>
</html>
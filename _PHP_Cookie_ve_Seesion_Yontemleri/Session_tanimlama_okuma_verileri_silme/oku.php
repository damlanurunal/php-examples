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

    echo $_SESSION["KullaniciAdi"] . "<br />";
    echo $_SESSION["KullaniciSoyadi"] . "<br />";
    echo $_SESSION["KullaniciEmail"] . "<br />";

    ?>
    <a href="sil.php">Session'lari sil</a>
</body>
</html>
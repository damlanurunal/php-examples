<?php
require_once("ayar.php");
?>
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
    <form action="sonuc.php" method="post">
        Kullanıcı Adı :<br />
        <input type="text" name="KullanicininAdi">
        Kullanıcı Sifresi : <br />
        <input type="password" name="KullanicininSifresi">
        <input type="submit" value="Giris Yap" >
    </form>
</html>
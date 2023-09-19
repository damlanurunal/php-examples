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

    $Isimler2  = array("Volkan","Hakan", array("Mavi","kırmızı","Sarı","Siyah",array("Masa","Sandalye","Sehpa")),"Onur");

    $dizininElemanSayisi    =   count($Isimler2); //eleman sayisini verir
    echo "Dizinin icindeki eleman sayisi :" . $dizininElemanSayisi;
    echo "<br /><br />";
    $dizininElemanSayisi2    =   count($Isimler2, COUNT_RECURSIVE); //Cok boyutlu dizilerde tüm boyutlar icerindeki elemanlarda sayma işlemine dahil edilir
    echo "Dizinin icindeki eleman sayisi :" . $dizininElemanSayisi2;

    array_unshift($Isimler2,"Levent","Serkan"); //dizinin en basina eleman ekler
    echo "<pre>";
    print_r($Isimler2);
    echo "<pre><br /><br />";
    
    $Isimler = array( "Mavi","Melih","Arda","Zehra");
    array_push($Isimler,"Arhan","Mervan"); //dizinin en sonuna eleman ekler
    echo "<pre>";
    print_r($Isimler);
    echo "<pre><br /><br />";

    array_shift($Isimler); //dizinin ilk elemanini siler degerini dondurur
    array_pop($Isimler); //dizinin son elemanini siler degerini dondurur


    $sonuc = key($Isimler);
    echo "Dizinin göstericisi konumundaki elemanin anahtar deger :" . $sonuc;
    
    $Sonuc = current($Isimler);
    echo "Dizinin göstericisi konumundaki elemanin degeri :" . $Sonuc;

    $sonEleman = end($Isimler);
    echo "Dizinin göstericisinin son konumundaki elemanin degeri :" . $Sonuc;

    next($Isimler2); //Dizinin göstericisinin komundaki anahtari veya elemani bir ileri alma
    prev($Isimler2); //Dizinin göstericisinin komundaki anahtari veya elemani bir geri alma

    $cumle = "Volkan Alakent Extra Eğitim";
    $diziHali = explode(" ",$cumle); // belirtilen ayraca göre parcalayarak yeni dizi olusturur

    echo "<pre>";
    print_r($diziHali);
    echo "<pre><br /><br />";
    
    $cumleHali = implode(" ",$Isimler); //diziyi metne cevirir

    echo $cumleHali;

    list($bir,$iki,$uc,$dort) = $Isimler; //elemanları degiskenlere atamak icin kullanilir

    $dizi = array( "Arhan", "Mervan","Adil","Zeynep");

    $YeniDizi = array_merge($Isimler, $dizi);  //dizileri birleştirerek yeni dizi oluşturur

    echo "<pre>";
    print_r($YeniDizi);
    echo "<pre><br /><br />";

    $YeniDizi2 = array_merge_recursive($Isimler,$dizi); //dizileri birleştirerek yeni dizi oluşturur (gelismis)

    $yeniDizi = array_combine($Isimler,$dizi); //iki farkli diziyi ilişkisel olarak birlestirir

    echo "<pre>";
    print_r($yeniDizi);
    echo "<pre><br /><br />";

    $yeniDizi2 = array_slice($YeniDizi, 3); // dizinin belirli bölümünü alip yeni dizi olusturur
    // $yeniDizi2 = array_slice($YeniDizi, 3, 1); böyle uzunlugunu belirtebiliriz
    echo "<pre>";
    print_r($yeniDizi2);
    echo "<pre><br /><br />";

    array_splice($Isimler,2, 3, "RECEP"); //dizinin belirli bölümleri alip,digerlerini silip belirtilirse yeni eleman ekler

    echo "<pre>";
    print_r($Isimler);
    echo "<pre><br /><br />";

    $parcala = array_chunk($YeniDizi,2); // diziyi parcalayarak coklu dizi elde eder

    echo "<pre>";
    print_r($yeniDizi);
    echo "<pre><br /><br />";

    $ayniEleman = array_intersect($dizi, $YeniDizi); //aynı elemanlanları alip yeni dizi ypar

    echo "<pre>";
    print_r($ayniEleman);
    echo "<pre><br /><br />";

    $farkliEleman = array_diff($YeniDizi2, $yeniDizi); //farkli elemanlanları alip yeni dizi ypar

    echo "<pre>";
    print_r($farkliEleman);
    echo "<pre><br /><br />";
    ?>
</body>
</html>
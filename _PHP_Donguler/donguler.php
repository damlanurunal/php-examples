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

    $BaslangicDegeri = 1;

    while($BaslangicDegeri <=10){

        echo $BaslangicDegeri. "<br />";

        if($BaslangicDegeri==5){
            break;  //break ile döngüyü sonlandırılır
        }

        $BaslangicDegeri++; //arttırmazsak sonsuz donguye girer
    }

    $Deger = 1;
    do{
        echo $Deger."<br>"; 
    }while($Deger <0) //while dongusunden tek farki kosulu saglamasa bile en az bir kere calisir
    
    
    for($i=1;$i<=5; $i++){

        echo "Merhaba php Dünyası"."<br>";
        
    }

    $renkler = array("Mavi", "Sari", "Siyah", array("Ali", "Asli", "Veli"));

    //cok boyutlu foreach 
    foreach ($renkler as $Icerik) {
       if(is_array($Icerik)){
        foreach($Icerik as $Deger){
            echo $Deger. "<br />";
        }
       }else{
        echo $Icerik . "<br>";
       }
    }
    $BaslangicDegeri2 = 1;
    while($BaslangicDegeri2 <=10){
        $BaslangicDegeri2++; 

        if($BaslangicDegeri2==5){
            continue;  // buraya geldiginde asagı inmeden basa gelerek dongunun devam etmesini saglar
        }

        echo $BaslangicDegeri2. "<br />";

        
    }



    ?>
</body>
</html>
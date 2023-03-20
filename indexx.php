
<?php include("index.html");  ?>

<?php

    function calculate($uzunluk , $kilo){
        $index = $kilo / ($uzunluk * $uzunluk);
        if(index <=18.5){
            echo "Vucut Kitle indexinin sonucu : Düşük kilolu" ;
        }
        elseif($index >18.5 && $index<=24.99){
            echo "Vucut Kitle indexin sonucu : Normal Kilo";

        }
        elseif($index >25 && index<=29.99 ){
            echo "Vucut Kitle indexin sonucu : Fazla Kilolu ";

        }
        else{
            echo "Vucut Kitle indexin sonucu : Obez ";
        }
        

    }



    $POST['BoyUzunluğu'] = $uzunluk;
    $POST['Kilo'] = $kilo;

    if(isset($_POST['Hesapla'])){
        if(!isset($uzunluk)){
         echo "Lütfen bir değer giriniz";
        }
       
    
        if(!isset($kilo)){
        echo "Lütfen bir değer giriniz";
        
        }
    } 







 ?>
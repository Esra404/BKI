
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BKI HESAPLAYICI</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">

</head>
<body>
  <header class="mt-3 text-center row">
  
    <div class="col-sm-10 align-right">
	<hr>
      <h1 class="text-secondary " style="color:chartreuse;">BEDEN KÜTLE İNDEKSİ HESAPLAMA</h1>
	  <hr>
    </div>
	
  </header>
  <div class="container mt-3">
    <form method="POST">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="weight" style="color:rgb(216, 35, 35)">Kilo için  kg.</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="weight" name="Kilo" placeholder="
          Kilonuzu kilogram olarak girin.">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="height" style="color:rgb(210, 29, 29)" >Uzunluk için cm.</label>
        <div class="col-sm-10">
          <input class="form-control" id="height" name="BoyUzunluğu" type="number" placeholder="
          Boyunuzu santimetre olarak girin.">
        </div>
      </div>
      <div class="form-group mt-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10 align-right">
          <button type="submit" class="btn btn-primary btn-block" name="Hesapla"
          >BKI Hesaplama
        </button>
        </div>
      </div>
    </form>
    <div class="row"></div>
      <div class="col-sm-2"></div>
      <div class="col-sm-10 align-right">
      <?php 
      function calculate($uzunluk , $kilo){
        $index = ($kilo / $uzunluk / $uzunluk) *10000;
        $bmiRounded = round($index ,1);
         if($index <=18.5){
         
          echo "<h2>Boy Kütle index sonucunuz : " . $bmiRounded . " Bu değere göre zayifsiniz lütfen dengeli ve sağlilkli bir şekilde beslenin </h2>";
          
          }
          elseif($index >18.5 && $index<=24.99){
            echo "<h2>Boy Kütle index sonucunuz : " . $bmiRounded . " Bu değere göre normal kilonuzdasiniz tedbiri elden birakmamak gerekir sağlikli yaşamlar ... </h2>";

          }
          elseif($index >25 && $index<=29.99 ){
            echo "<h2>Boy Kütle index sonucunuz : " . $bmiRounded . " Bu değere göre fazla kilolusunuz lütfen sağlikli bir yaşam için az ve dengeli beslenin </h2>";

          }
          else{
            echo "<h2>Boy Kütle index sonucunuz : " . $bmiRounded . " Bu değere göre obezsiniz lütfen sağlikli bir yaşam için az ve dengeli beslenin </h2>";
         }
        
         
    if(isset($_POST['Hesapla'])){
      if(!isset($uzunluk)){
       echo "Lütfen bir değer giriniz";
      }
      if(!isset($kilo)){
      echo "Lütfen bir değer giriniz";
      
      }
  } 
        }
        $uzunluk =  filter_var(htmlentities(floatval($_POST['BoyUzunluğu'])),FILTER_SANITIZE_NUMBER_FLOAT);
        $kilo =  filter_var(htmlentities(floatval($_POST['Kilo'])),FILTER_SANITIZE_NUMBER_FLOAT);

        calculate($uzunluk, $kilo);
    
    ?>
    
    </div>
    </div>
  </div>
</body>
</html>

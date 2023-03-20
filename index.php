

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
      <h1 class="text-secondary " style="color: rgb(255, 255, 255);">BEDEN KÜTLE İNDEKSİ HESAPLAMA</h1>
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
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-10 align-right">
      
  
    </div>
    </div>
  </div>
</body>
</html>
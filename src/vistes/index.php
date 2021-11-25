<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Exemple d'us de sessions</title>
  </head>
  <body>
    <?php include("cap.php"); ?>
    <div class="container">
      <div class="row mt-1 mb-3">
        <div class="col"><h1>Exemple per veure com funcionen les sessions</h1></div>
      </div>

    
      
      <div class="row mt-4">
        <div class="col-3">
          <div class="list-group">
    
            
          </div>
        </div>
        <div class="col-9">
          <?php if($logat) { ?>
                  <h1>Hola <?=$login["usuari"]; ?></h1>
            <?php } else { ?>  
              <a href="index.php?r=login" class="btn">Login</a>
          <?php } ?>  
          </div>
      </div>
      <div class="row mt-5 mb-4">
        <div class="col">
          <div class="bg-light border rounded p-3">
          <h2>M07 - Desenvolupament web entorn servidor</h2>
          <p>Professor: Dani Prados</p>
          
          </div>
        </div>
      </div>

    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
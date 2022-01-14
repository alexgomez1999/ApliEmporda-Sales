<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llista de reserves</title>
    <?php require "../src/vistes/util/head.php" ?>
</head>
<body>
<?php require "../src/vistes/util/navbar.php" ?>
<div class="index-user-container">
    <?php foreach ($sala as $row) { ?>
        <div class="index-user-container2">
          <img src="https://www.desarrollolibre.net/public/broken-img.png" alt="" class="imatge-sala">
          <div class="column-container">
            <b><?php echo $row['Nom'] ?></b>
            <p><?php echo $row['Ubicacio'] ?>, <?php echo $row['Centre'] ?></p>
          </div>
          <div class="column-container">
            <b>Data</b>
            <p><?php echo $row['Data'] ?></p>
          </div>
          <div class="column-container">
            <b>Hora</b>
            <p>De:  <?php echo $row['HoraInici'] ?> A: <?php echo $row['HoraFi'] ?></p>
          </div>
          <a href="index.php?r=deleteReservation&id=<?php echo $row['Id'] ?>">Eliminar</a>
        </div>
    <?php } ?>
    <a href="index.php?r=newReservation" class="reservarBtn" style="text-decoration:none"><i class="fas fa-plus"></i></a>
</div>
</body>
</html>
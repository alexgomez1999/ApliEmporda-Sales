<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $Data = new DateTime($Dia);
    ?>
    <h3>Les dades de la teva reserva són les següents:</h3>
    <p><b>Ubicació</b>: <?= $Ubicacio ?></p>
    <p><b>Centre</b>: <?= $Centre ?></p>
    <p><b>Data</b>: <?= $Data->format('d-m-Y') ?></p>
    <p><b>Hora Entrada</b>: <?= $HoraInici ?></p>
    <p><b>Hora Sortida</b>: <?= $HoraFi ?></p>
    <p><b>Persones</b>: <?= $Persones ?></p>
</body>
</html>
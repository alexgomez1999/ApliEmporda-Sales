<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "../src/vistes/util/head.php" ?>
    <title>Reservation</title>
</head>

<body>
<?php require "../src/vistes/util/navbar.php" ?>
    <div class="flex-container">
        <form action="index.php" method="POST" class="reservation-form" autocomplete="off">
            <input type="hidden" name="r" value="makeReservation">
            <div class="flex-column-container">
                <label for="ubi">Ubicació</label>
                <select name="Ubicacio" id="ubi">
                    <option value="%">-</option>
                    <?php foreach ($ubi as $ubicacio) { ?>
                        <option value="<?php echo $ubicacio["Ubicacio"] ?>"><?php echo $ubicacio["Ubicacio"] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="flex-column-container">
                <label for="centre">Centre</label>
                <select name="Centre" id="centre" disabled>
                    <option value="0">-</option>
                    <?php foreach ($centre as $c) { ?>
                        <option value="<?php echo $c["Centre"] ?>"><?php echo $c["Nom"] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="flex-column-container">
                <label for="data">Dia</label>
                <input type="date" name="Data" id="data" disabled>
            </div>
            <div class="flex-column-container">
                <label for="hentrada">Hora entrada</label>
                <input type="time" name="HoraEntrada" id="hentrada" disabled>
            </div>
            <div class="flex-column-container">
                <label for="hsortida">Hora sortida</label>
                <input type="time" name="HoraFi" id="hsortida" disabled>
            </div>
            <div class="flex-column-container">
                <label for="persones">Persones</label>
                <input type="number" name="Persones" id="persones" value="0" min=0 disabled>
            </div>
            <div class="flex-column-container">
                <button type="submit" id="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>

        <!-- <div class="results">
            <div class="desc-sala">
                <p>Sala 1</p>
                <p>Centre 1</p>
                <p>Figueres</p>
                <p>Aforament màxim: 10</p>
            </div>
            <div class="second-container">

                <div class="res">
                    <div class="name-title">
                        <strong>Recurs:</strong>
                    </div>
                    <div class="res-content"></div>
                </div>
                
                <div class="res">
                    <div class="name-title">
                        <strong>Quantitat:</strong>
                    </div>
                    <div class="res-content"></div>
                </div>

            </div>
            
            <div class="foto-sala2">
                <img src="https://img.lovepik.com/photo/20211123/medium/lovepik-corporate-conference-room-environment-picture_500803335.jpg" alt="" class="imatge-sala">
            </div>
        </div> -->

        <div id="cont"></div>
        <div id="sales"></div>
        
    </div>
</body>
<footer>
    <?php require "util/footer.php" ?>
</footer>
</html>

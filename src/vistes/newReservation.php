<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../src/vistes/util/head.php" ?>
    <title>Reservation</title>
</head>

<body>
<?php include "../src/vistes/util/navbar.php" ?>
    <div class="flex-container">
        <form action="index.php" method="POST" class="reservation-form" autocomplete="off">
            <input type="hidden" name="r" value="makeReservation">
            <div class="flex-column-container">
                <label for="ubi">Ubicació</label>
                <select name="Ubicacio" id="ubi">
                    <option value="-">-</option>
                    <option value="Figueres">Figueres</option>
                    <option value="Girona">Girona</option>
                </select>
            </div>
            <div class="flex-column-container">
                <label for="centre">Centre</label>
                <select name="Centre" id="centre">
                    <option value="-">-</option>
                    <option value="Centre 1">Centre 1</option>
                    <option value="Centre 2">Centre 2</option>
                </select>
            </div>
            <div class="flex-column-container">
                <label for="data">Dia</label>
                <input type="date" name="Data" id="data">
            </div>
            <div class="flex-column-container">
                <label for="hentrada">Hora entrada</label>
                <input type="time" name="HoraEntrada" id="hentrada">
            </div>
            <div class="flex-column-container">
                <label for="hsortida">Hora sortida</label>
                <input type="time" name="HoraFi" id="hsortida">
            </div>
            <div class="flex-column-container">
                <label for="persones">Persones</label>
                <input type="number" name="Persones" id="persones" min=0>
            </div>
            <div class="flex-column-container">
                <button type="submit" id="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <div id="cont"></div>
        <!-- Per cada sala disponible -->
        <div id="sales">
            <div id="dades-sala">
                <p>Nom sala</p>
                <p>Nom centre</p>
                <p>Ubicació</p>
            </div>
            <div id="recursos-sala">
                <p>Recursos</p>
            </div>
            <div id="foto-sala">
                <img src="https://www.desarrollolibre.net/public/broken-img.png" alt="" class="imatge-sala">
            </div>
        </div>
        <!--  -->
        <!-- Per cada sala disponible -->
        <div id="sales">
            <div id="dades-sala">
                <p>Nom sala</p>
                <p>Nom centre</p>
                <p>Ubicació</p>
            </div>
            <div id="recursos-sala">
                <p>Recursos</p>
            </div>
            <div id="foto-sala">
                <img src="https://www.desarrollolibre.net/public/broken-img.png" alt="" class="imatge-sala">
            </div>
        </div>
        <!--  -->
    </div>
</body>
<footer>
    <?php include "util/footer.php" ?>
</footer>
</html>
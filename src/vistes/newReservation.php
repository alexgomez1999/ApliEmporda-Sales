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
                <select name="Centre" id="centre" disabled>
                    <option value="-">-</option>
                    <option value="1">Centre 1</option>
                    <option value="2">Centre 2</option>
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
                <input type="number" name="Persones" id="persones" min=0 disabled>
            </div>
            <div class="flex-column-container">
                <button type="submit" id="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <div id="cont"></div>
        <div id="sales"></div>
        
    </div>
</body>
<footer>
    <?php include "util/footer.php" ?>
</footer>
</html>
$(document).ready(function() {
    $("div#anarusuaris").click(function() {
        window.location.assign("index.php?info=usuaris");
    });
    $("div#anarsales").click(function() {
        window.location.assign("index.php?info=sales");
    });
    $("div#anarrecursos").click(function() {
        window.location.assign("index.php?info=recursos");
    });
    $("div#anarreserves").click(function() {
        window.location.assign("index.php?info=reserves");
    });
    $("div#anarincidencies").click(function() {
        window.location.assign("index.php?info=incidencies");
    });
});
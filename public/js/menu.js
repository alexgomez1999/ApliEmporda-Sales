<<<<<<< HEAD
$(document).ready(function() {
    if ($("nav#menu > div.container-fluid > button.navbar-toggler").is(":hidden")) {
        $("nav#menu > div.container-fluid > div#navbarNav").fadeOut().animate({"top": "-30px"});
    } else {
        $("nav#menu > div.container-fluid > div#navbarNav").fadeIn().animate({"top": "30px"});
    }
    
    $("nav#menu > div.container-fluid > button.navbar-toggler").on("click", function() {
        $("nav#menu > div.container-fluid > div#navbarNav").fadeToggle().animate({"top": "-30px"});
    });
=======
$(document).ready(function() {
    if ($("nav#menu > div.container-fluid > button.navbar-toggler").is(":hidden")) {
        $("nav#menu > div.container-fluid > div#navbarNav").fadeOut().animate({"top": "-30px"});
    } else {
        $("nav#menu > div.container-fluid > div#navbarNav").fadeIn().animate({"top": "30px"});
    }
    
    $("nav#menu > div.container-fluid > button.navbar-toggler").on("click", function() {
        $("nav#menu > div.container-fluid > div#navbarNav").fadeToggle().animate({"top": "-30px"});
    });
>>>>>>> 6975a6afa409e260089c5ea7ad60f737da5e60b6
});
let ubi = '';
let centre = '';
let dia = '';
let entrada = '';
let sortida = '';
let persones = '';

const cont = $('#cont');

// ubication listener
$('#ubi').on('change', () => {
    ubi = {
        ubicacio: $("#ubi option:selected").text()
    };
    $.ajax({
        url: 'index.php?r=checkUbi',
        type: 'POST',
        data: ubi,
        success: function(response) {
            const res = (response);
            console.log(res);
        }
    });
    drawResults();
});

// center listener
$('#centre').on('change', () => {
    centre = $("#centre option:selected").text();
    $.ajax({
        url: 'index.php?r=checkCenter',
        type: 'POST',
        data: { centre },
        success: (response) => {
            console.log(response);
        }
    });
    drawResults();
});

// date listener
$('#data').on('change', () => {
    var date = new Date($('#data').val());
    day = date.getDate();
    month = date.getMonth() + 1;
    year = date.getFullYear();
    dia = [day, month, year].join('/');
    $.ajax({
        url: 'index.php?r=checkDay',
        type: 'POST',
        data: { dia },
        success: (response) => {
            console.log(response);
        }
    });
    drawResults();
});

// arrival listener
$('#hentrada').on('keyup', () => {
    entrada = $('#hentrada').val();
    drawResults();
});

// departure listener
$('#hsortida').on('keyup', () => {
    sortida = $('#hsortida').val();
    $.ajax({
        url: 'index.php?r=checkHours',
        type: 'POST',
        data: { entrada, sortida },
        success: (response) => {
            console.log(response);
        }
    });
    drawResults();
});

// persons listener
$('#persones').on('keyup change', () => {
    persones = $('#persones').val();
    $.ajax({
        url: 'index.php?r=checkPersons',
        type: 'POST',
        data: { persones },
        success: (response) => {
            console.log(response);
        }
    });
    drawResults();
});

// submit button listener
$('#submit').on('click', (e) => {
    e.preventDefault();
    drawResults();
});

// function to implement results
function drawResults() {
    let temp =  `<p>
                Ubi: ${ubi}<br>
                Centre: ${centre}<br>
                Dia: ${dia}<br>
                Arrivada: ${entrada}<br>
                Sortida: ${sortida}<br>
                Persones: ${persones}<br>
                </p>`;

    cont.html(temp);
}
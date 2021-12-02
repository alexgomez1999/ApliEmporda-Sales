let ubi = '';
let centre = '';
let dia = '';
let entrada = '';
let sortida = '';
let persones = '';

const cont = $('#cont');

// ubication listener
$('#ubi').on('change', () => {
    ubi = $("#ubi option:selected").text();
    drawResults();
});

// center listener
$('#centre').on('change', () => {
    centre = $("#centre option:selected").text();
    drawResults();
});

// date listener
$('#data').on('change', () => {
    var date = new Date($('#data').val());
    day = date.getDate();
    month = date.getMonth() + 1;
    year = date.getFullYear();
    dia = [day, month, year].join('/');
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
    drawResults();
});

// members listener
$('#persones').on('keyup', () => {
    persones = $('#persones').val();
    drawResults();
});

$('#submit').on('click', (e) => {
    e.preventDefault();
    drawResults();
});

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
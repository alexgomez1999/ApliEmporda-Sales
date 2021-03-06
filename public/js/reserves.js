let ubi = '%';
let centre = '0';
let dia = '';
let entrada = '';
let sortida = '';
let persones = '0';

const cont = $('#cont');

// ubication listener
$('#ubi').on('change', () => {
    ubi = $("#ubi option:selected").text();

    SQLquery();

    $("#centre").prop('disabled', false);
});

// center listener
$('#centre').on('change', () => {
    centre = $("#centre option:selected").val();

    SQLquery();

    $("#data").prop('disabled', false);
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
            
        }
    });
    $("#hentrada").prop('disabled', false);
});

// arrival listener
$('#hentrada').on('keyup', () => {
    entrada = $('#hentrada').val();
    
    $("#hsortida").prop('disabled', false);
});

// departure listener
$('#hsortida').on('keyup', () => {
    sortida = $('#hsortida').val();
    $.ajax({
        url: 'index.php?r=checkHours',
        type: 'POST',
        data: { entrada, sortida },
        success: (response) => {
            
        }
    });
    $("#persones").prop('disabled', false);
});

// persons listener
$('#persones').on('keyup change', () => {
    persones = $('#persones').val();

    SQLquery();

});

// submit button listener
$('.reservation-form').on('submit', (e) => {
    e.preventDefault();

    const postData = {
        'ubicacio': $('#ubi').val(),
        'centre': $('#centre').val(),
        'dia': $('#data').val(),
        'entrada': $('#hentrada').val(),
        'sortida': $('#hsortida').val(),
        'persones': $('#persones').val()
    }

    $.ajax({
        url: 'index.php?r=salesDisponibles',
        type: 'POST',
        data: postData,
        success: (response) => {
            // const res = JSON.parse(response);
            console.log(response);
        }
    });
});

function SQLquery() {

    const postData = {
        ubi, centre, dia, entrada, sortida, persones
    }

    $.ajax({
        url: 'index.php?r=NewReservationQuery',
        type: 'POST',
        data: postData,
        success: (response) => {
            fetchResults(response)
        }
    });
}

function fetchResults(response) {

    const r = response.substring(0, response.indexOf("<"));

    console.log("RESPOSTA: " + r);

    const res = JSON.parse(r);

    let temp = '';
    $(res).each((val, index) => {

        let CodiSala = index.Codi;
        let postData = { CodiSala };

        $.ajax({
            url: 'index.php?r=getRecursos',
            type: 'POST',
            data: postData,
            success: (response) => {
                const r = response.substring(0, response.indexOf("<"));

                console.log("RESPOSTA: " + r);
            }
        });

        temp += 
        `
        <div id="sala">
        <div id="dades-sala">
            <p>${index.Nom}</p>
            <p>${index.NomCentre}</p>
            <p>${index.Ubicacio}</p>
            <p>Aforament Sala: ${index.AforamentDisponible}</p>
        </div>
        <div id="recursos-sala">
            <table cellpadding="20">
                <tr class="underlined-cell">
                    <td><strong>Recurs:</strong></td>
                    <td>Cadira</td>
                    <td>Taula</td>
                    <td>Projector</td>
                </tr>
                <tr>
                    <td><strong>Quantitat:</strong></td>
                    <td>15</td>
                    <td>5</td>
                    <td>1</td>
                </tr>
            </table>
            </div>
            <div id="foto-sala">
                <img src="https://img.lovepik.com/photo/20211123/medium/lovepik-corporate-conference-room-environment-picture_500803335.jpg" alt="" class="imatge-sala">
            </div>
        </div>
        `;
    });
    $('#sales').html(temp);
}
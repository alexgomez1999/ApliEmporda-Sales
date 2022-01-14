let anySelect;
let mesSelect;
let mesosAny = ["Gener", "Febrer", "Març", "Abril", "Maig", "Juny", "Juliol", "Agost", "Setembre", "Octubre", "Novembre", "Desembre"];
let diasSetmanaEuropeu = ["Dl.", "Dt.", "Dm.", "Dj.", "Dv.", "Ds.", "Dg."];
let diasSetmanaAmerica = ["Diumenge", "Dilluns", "Dimarts", "Dimecres", "Dijous", "Divendres", "Dissabte"];

/**
 * Funció que s'executara quan la pàgina estigui totalment carregada
 * **/
$(document).ready(function () {
    setEstructura();

    setTitol();

    document.getElementById("btnAbans").addEventListener("click", setMesAnterior);
    document.getElementById("btnDespres").addEventListener("click", setMesSeguent);
    $("div#divCalendari table tr > td").click(function (e) {
        let diaActual = $(e.target).text();
        let mesActual = $(e.target).children("input[name=mesActual]").val();
        let anyActual = $(e.target).children("input[name=anyActual]").val();

        if (diaActual != " ") {
            let dataSelect = `${ anyActual } - ${ mesActual } - ${ diaActual }`;

            let dataSelectObj = new Date(dataSelect);

            $("#CosModal1").children().remove();

            $.ajax({
                url: 'index.php?r=tevesReservesAjax',
                type: 'POST',
                data: { dataSelect, mesActual },
                success: function (data) {
                    let resultatJson = data;
                    resultatJson = resultatJson.substring(0, resultatJson.indexOf("<"));

                    let resultat;
                    if (resultatJson != "0") {
                        resultat = $.parseJSON(resultatJson);

                        $("#CosModal1").append(` < ul class = "list-group" > < / ul > `);

                        resultat.forEach(element => {
                            $("#CosModal1 > ul").append(` < li class = "list-group-item list-group-item-light" >
                            < h5 > ${ element["Nom"] } < / h5 >
                            < hr >
                            < p > < strong > Data: <  / strong > ${ diasSetmanaAmerica[dataSelectObj.getDay()] } ${ dataSelectObj.getDate() } de ${ mesosAny[dataSelectObj.getMonth()] } del ${ dataSelectObj.getFullYear() } < br >
                            < strong > Hora: <  / strong > de ${ element["HoraInici"] } a ${ element["HoraFi"] } < br >
                            < strong > Lloc: <  / strong > ${ element["Centre"] }, ${ element["Ubicacio"] } < br >
                            < strong > Assistència: <  / strong > ${ element["Aforament"] } persones < / p > < / li > `);
                        });

                        $("#TitolModal1").html(` < span > < i class = "fas fa-info-circle" > < / i > < / span > Reserves del ${ diasSetmanaAmerica[dataSelectObj.getDay()] } ${ dataSelectObj.getDate() } de ${ mesosAny[dataSelectObj.getMonth()] } del ${ dataSelectObj.getFullYear() }`);

                        $("#modalReservaSala").show().animate({"top": "10px"});
                    } else {
                        $("#CosModal1").append(` < div class = "alert alert-warning" role = "alert" >
                        No tens cap Reserva per aquest dia.< / div > `);

                        $("#TitolModal1").html(` < span > < i class = "fas fa-info-circle" > < / i > < / span > Reserves del ${ diasSetmanaAmerica[dataSelectObj.getDay()] } ${ dataSelectObj.getDate() } de ${ mesosAny[dataSelectObj.getMonth()] } del ${ dataSelectObj.getFullYear() }`);

                        $("#modalReservaSala").show().animate({"top": "10px"});
                    }
                }
            });
        }
    });
    $("#TancaModal1, #btnTancaModal1").click(function () {
        $("#modalReservaSala").hide().animate({"top": "-10px"});
    });
    $(".salesReservadesModal h5").click(function (e) {
        console.log($(e.target));
    });
});

/**
 * setReservesCalendari: Funció que mostra al calendari els dies amb reserves
 * **/
function setReservesCalendari()
{
    let arrayDies = $("div#divCalendari table tr > td");

    $("div#divCalendari table tr > td").each(function (index) {
        let diaActual = $(this).text();
        let mesActual = $(this).children("input[name=mesActual]").val();
        let anyActual = $(this).children("input[name=anyActual]").val();

        if (diaActual != " ") {
            let dataSelect = `${ anyActual } - ${ mesActual } - ${ diaActual }`;

            $.ajax({
                url: 'index.php?r=tevesReservesAjax',
                type: 'POST',
                data: { dataSelect, mesActual },
                success: function (data) {
                    let resultatJson = data;
                    resultatJson = resultatJson.substring(0, resultatJson.indexOf("<"));

                    if (resultatJson != "0") {
                        let divSales = document.createElement("div");
                        arrayDies[index].prepend(divSales);

                        let spanPare = document.createElement("span");
                        spanPare.setAttribute("class", "position-absolute ml-3 top-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle");
                        divSales.appendChild(spanPare);
                        let spanFill = document.createElement("span");
                        spanFill.setAttribute("class", "visually-hidden");
                        spanPare.appendChild(spanFill);
                    }
                }
            });
        }
    });
};

/**
 * setMesSeguent: Funció que retrocedeix un mes en el temps
 * **/
function setMesAnterior()
{
    if (mesSelect > 0) {
        mesSelect = mesSelect - 1;
    } else {
        anySelect = anySelect - 1;
        mesSelect = 11;
    }

    setReiniciaCalendari(anySelect, mesSelect);
    setTitol()
};

/**
 * setMesSeguent: Funció que avança un mes en el temps
 * **/
function setMesSeguent()
{
    if (mesSelect < 11) {
        mesSelect = mesSelect + 1;
    } else {
        anySelect = anySelect + 1;
        mesSelect = 0;
    }

    setReiniciaCalendari(anySelect, mesSelect);
    setTitol()
};

/**
 * setReiniciaCalendari: Funció que reinicia i torna a formar els dies del calendari
 * @param anySelect any actualment seleccionat del calendari
 * @param mesSelect mes actualment seleccionat del calendari
 * **/
function setReiniciaCalendari(anySelect, mesSelect)
{
    let tds = document.getElementsByTagName("td");

    for (let i = 0; i < tds.length; i++) {
        tds[i].innerHTML = " ";
        tds[i].removeAttribute("class");
    }

    setCalendari(anySelect, mesSelect);
};

/**
 * setTitol: Funció que afageix un titol informant del mes i any seleccionats
 * **/
function setTitol()
{
    document.getElementById("infoCalendar").innerHTML = mesosAny[mesSelect] + " de " + anySelect;
};

/**
 * setEstructura: Funció que forma l'estructura del calendari i l'afageix a la pàgina
 * **/
function setEstructura()
{
    let dataActual = new Date();

    anySelect = dataActual.getFullYear();
    mesSelect = dataActual.getMonth();

    setCrearCalendari();

    setCalendari(anySelect, mesSelect);
};

/**
 * setCrearCalendari: Funció que forma l'estructura del calendari
 * **/
function setCrearCalendari()
{
    let divCalendari = document.getElementById("divCalendari");

    let taula = document.createElement("table");
    taula.setAttribute("class", "col-md-12 table table-lg align-middle text-center");
    divCalendari.appendChild(taula);

    let capsalera = document.createElement("thead");
    taula.appendChild(capsalera);
    let fila2 = document.createElement("tr");
    capsalera.appendChild(fila2);
    for (let i = 0; i < diasSetmanaEuropeu.length; i++) {
        let columna1 = document.createElement("th");
        columna1.innerHTML = diasSetmanaEuropeu[i];
        fila2.appendChild(columna1);
    }

    let cos = document.createElement("tbody");
    taula.appendChild(cos);
    for (let i = 0; i < 6; i++) {
        let fila3 = document.createElement("tr");
        cos.appendChild(fila3);
        for (let i = 0; i < diasSetmanaEuropeu.length; i++) {
            let columna3 = document.createElement("td");
            columna3.innerHTML = " ";
            fila3.appendChild(columna3);
        }
    }
};

/**
 * setCalendari: Funció que afageix els dies correctament al calendari
 * @param anySelect any actualment seleccionat del calendari
 * @param mesSelect mes actualment seleccionat del calendari
 * **/
function setCalendari(anySelect, mesSelect)
{
    let dataActual = new Date();
    let divCalendari = document.getElementById("divCalendari");
    let setmana;
    for (let i = 1; i < 366; i++) {
        let data = getDataPerDia(anySelect, i);

        let mes = data.getMonth();
        let dia = data.getDate();
        let dia_setmana = data.getDay();

        if (dia == 1) {
            setmana = 0;
        }

        if (dia_setmana == 0) {
            dia_setmana = 6;
        } else {
            dia_setmana = dia_setmana - 1;
        }

        if (mesSelect == mes) {
            divCalendari.children[0].children[1].children[setmana].children[dia_setmana].setAttribute("class", "diaMes");
            divCalendari.children[0].children[1].children[setmana].children[dia_setmana].innerHTML = dia;
            let inputMes = document.createElement("input");
            inputMes.setAttribute("type", "hidden");
            inputMes.setAttribute("value", (mes + 1));
            inputMes.setAttribute("name", "mesActual");
            divCalendari.children[0].children[1].children[setmana].children[dia_setmana].appendChild(inputMes);
            let inputAny = document.createElement("input");
            inputAny.setAttribute("type", "hidden");
            inputAny.setAttribute("value", data.getFullYear());
            inputAny.setAttribute("name", "anyActual");
            divCalendari.children[0].children[1].children[setmana].children[dia_setmana].appendChild(inputAny);

            if (dia_setmana == 5 || dia_setmana == 6) {
                divCalendari.children[0].children[1].children[setmana].children[dia_setmana].removeAttribute("class")
                divCalendari.children[0].children[1].children[setmana].children[dia_setmana].setAttribute("class", "diaMes diesFestius");
            }

            if (anySelect == dataActual.getFullYear() && mesSelect == dataActual.getMonth() && dia == dataActual.getDate()) {
                divCalendari.children[0].children[1].children[setmana].children[dia_setmana].removeAttribute("class")
                divCalendari.children[0].children[1].children[setmana].children[dia_setmana].setAttribute("class", "diaMesActual diaActual");
            }
        }

        if (dia_setmana == 6) {
            setmana = setmana + 1;
        }
    }

    setReservesCalendari();
};

/**
 * getDataPerDia: Funció que retorna un timestamp del dia especificat en el parametre
 * @param any any actual
 * @param dia dia actual
 *
 * Aquesta funció s'executa a la funció setCalendari
 * **/
function getDataPerDia(any, dia)
{
    let data = new Date(any, 0);
    return new Date(data.setDate(dia));
};
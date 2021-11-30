let mesosAny = ["Gener", "Febrer", "Març", "Abril", "Maig", "Juny", "Juliol", "Agost", "Setembre", "Octubre", "Novembre", "Desembre"];
let diasSetmanaEuropeu = ["Dl.", "Dt.", "Dm.", "Dj.", "Dv.", "Ds.", "Dg."];

window.onload = function() {
    setEstructura();
}

function setEstructura() {
    let dataActual = new Date();

    setCrearCalendari();

    setCalendari(dataActual.getFullYear(), dataActual.getMonth());
};

function setCrearCalendari() {
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

function setCalendari(anyActual, mesActual) {
    let divCalendari = document.getElementById("divCalendari");
    let setmana;
    for (let i = 1; i < 366; i++) {
        let data = getDataPerDia(2021, i);

        let mes = data.getMonth();
        let dia = data.getDate();
        let dia_setmana = data.getDay();

        if (dia_setmana == 0) {
            dia_setmana = 6;
        } else {
            dia_setmana = dia_setmana - 1;
        }
        
        if (dia == 1) {
            setmana = 0;
        }

        if (mesActual == mes) {
            divCalendari.children[0].children[1].children[setmana].children[dia_setmana].setAttribute("class", "diaMes");
            divCalendari.children[0].children[1].children[setmana].children[dia_setmana].innerHTML = dia;
        }

        if (dia_setmana == 6) {
            setmana = setmana + 1;
        }
    }
};

function getDataPerDia(any, dia) {
    let data = new Date(any, 0);
    return new Date(data.setDate(dia));
};
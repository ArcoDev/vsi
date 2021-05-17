//Variables
const cont1 = document.getElementById('contador1');
const cont2 = document.getElementById('contador2');
const cont3 = document.getElementById('contador3');
const cont4 = document.getElementById('contador4');

window.onscroll = function () {
    const y = window.scrollY;
    //console.log(y);
    if(scrollY === 1200) {
        animaNumeros();
        console.log('llegue');
    } else {
        return false;
    }
}

function animaNumeros() {
    let cantidad1 = 0,
        cantidad2 = 0,
        cantidad3 = 0,
        cantidad4 = 0,
        temp = 25;

    let tiempo1 = setInterval(() => {
        cont1.textContent = cantidad1 += 1;

        if (cantidad1 === 7) {
            clearInterval(tiempo1)
        }
    }, 200);

    let tiempo2 = setInterval(() => {
        cont2.textContent = cantidad2 += 1;

        if (cantidad2 === 20) {
            clearInterval(tiempo2)
        }
    }, 200);

    let tiempo3 = setInterval(() => {
        const texto = '+ ';
        cantidad3 += 1;
        cont3.textContent = texto + cantidad3;

        if (cantidad3 === 15) {
            clearInterval(tiempo3)
        }
    }, 200);

    let tiempo4 = setInterval(() => {
        const pesos = '$ ';
        const texto = ' M';
        cantidad4 += 1;
        cont4.textContent = pesos + cantidad4 + texto;

        if (cantidad4 === 200) {
            clearInterval(tiempo4)
        }
    }, 30);
}
document.addEventListener('DOMContentLoaded', function () {
    observerNum();
});

//API observer (observar cuando el div con la calse caja-numeros este visible y ejuctar la animacion de los numeros)
function observerNum() {
    const observer = new IntersectionObserver(function (entrise) {
        if (entrise[0].isIntersecting) {
            animaNumeros();
        }
    });
    observer.observe(document.querySelector('.caja-numeros'));
}

function animaNumeros() {
    //Variables
    const cont1 = document.getElementById('contador1');
    const cont2 = document.getElementById('contador2');
    const cont3 = document.getElementById('contador3');
    const cont4 = document.getElementById('contador4');
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
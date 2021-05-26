//Variables Globales
let proyectoVal = 0;
let cerrarProyecto = 1;

window.addEventListener('DOMContentLoaded', function () {
    mostrarInfoProyecto();
    cerrarInfoProyecto();
    cambiarInfoProyecto();
});

function mostrarInfoProyecto() {
    const seccionActual = document.querySelector(`#proyecto-${proyectoVal}`);
    seccionActual.classList.add('mostrar-info');
}

function cambiarInfoProyecto() {
    const proyectos = document.querySelectorAll('.proyectos img');
    proyectos.forEach(proy => {
        proy.addEventListener('click', e => {
            e.preventDefault();
            proyectoVal = parseInt(e.target.dataset.proyecto);

            //Ocultar seccion que contenga mostrar-info
            document.querySelector('.mostrar-info').classList.remove('mostrar-info');

            //Agrega mostrar-info, al proyecto seleccionado
            const seccion = document.querySelector(`#proyecto-${proyectoVal}`);
            seccion.classList.add('mostrar-info');

        });
    });
}

function cerrarInfoProyecto() {
    const cerrar = document.querySelectorAll('.info-proyecto span');
    cerrar.forEach(spanCerrar => {
        spanCerrar.addEventListener('click', e => {
            //Removerla la clase 
            document.querySelector('.mostrar-info').classList.remove('mostrar-info');
            //inicializar el contador a 0
            proyectoVal = 0;
            //volver agregar la mostrar-info
            const seccion = document.querySelector(`#proyecto-${proyectoVal}`);
            seccion.classList.add('mostrar-info');
        });
    });
}
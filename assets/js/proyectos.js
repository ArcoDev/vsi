window.addEventListener('DOMContentLoaded', function() {
    const postal = document.getElementById('postal');
    const palo = document.getElementById('palo');
    const plaza = document.getElementById('plaza');
    const noma = document.getElementById('noma');
    const cajaImg = document.getElementById('caja-img');
    const cajaImg1 = document.getElementById('caja-img1');
    const cajaImg2 = document.getElementById('caja-img2');
    const cajaImg3 = document.getElementById('caja-img3');
    const cerrar = document.getElementById('cerrar');
    const cerrar1 = document.getElementById('cerrar1');
    const cerrar2 = document.getElementById('cerrar2');
    const cerrar3 = document.getElementById('cerrar3');


    postal.addEventListener('click', function() {
        cajaImg.style.display = 'block';
        cajaImg1.style.display = 'none';
        cajaImg2.style.display = 'none';
        cajaImg3.style.display = 'none';

    });
    palo.addEventListener('click', function() {
        cajaImg1.style.display = 'block';
        cajaImg.style.display = 'none';
        cajaImg2.style.display = 'none';
        cajaImg3.style.display = 'none';
    });
    plaza.addEventListener('click', function() {
        cajaImg2.style.display = 'block';
        cajaImg.style.display = 'none';
        cajaImg1.style.display = 'none';
        cajaImg3.style.display = 'none';
    });
    noma.addEventListener('click', function() {
        cajaImg3.style.display = 'block';
        cajaImg.style.display = 'none';
        cajaImg1.style.display = 'none';
        cajaImg2.style.display = 'none';
    });
    
    cerrar.addEventListener('click', function() {
        cajaImg.style.display = 'none';
    });
    cerrar1.addEventListener('click', function() {
        cajaImg1.style.display = 'none';
    });
    cerrar2.addEventListener('click', function() {
        cajaImg2.style.display = 'none';
    });
    cerrar3.addEventListener('click', function() {
        cajaImg3.style.display = 'none';
    })
});
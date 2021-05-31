$(document).ready(function () {
    /* Crear un usuario y mandar info a la BD */
    $('#guardar-galeria').on('submit', function (e) {
        e.preventDefault();

        var datos = new FormData(this);

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            contentType: false,
            processData: false,
            async: true,
            cache: false,
            beforeSend: function () {
                $('#loader').show();
            },
            success: function (data) {
                var resultado = data;
                if (resultado.respuesta === 'exito') {
                    swal(
                        'El proyecto!',
                        'Se agrego correctamente.',
                        'success'
                    );
                    $('#loader').hide();
                    $('#guardar-galeria')[0].reset();
                } else {
                    swal(
                        'Ooops!',
                        'No se puede cargar el producto',
                        'error'
                    );
                }
                if (resultado.respuesta === 'actualizar') {
                    swal(
                        'El Proyecto!',
                        'Se edito correctamente.',
                        'success'
                    );
                }
            }
        });
    });
    /* Borrar imagen de la galeria de proyectos */
    $('.eliminar-img').on('click', function (e) {
        e.preventDefault();

        var datos = {'eliminar_img': $(this).val(), 'registro': 'eliminaImg'};
        $.ajax({
            type: 'POST',
            data: datos,
            url: 'modelo-galeria.php',
            dataType: 'json',
            success: function (data) {
                var resultado = data;
                if (resultado.respuesta === 'prueba') {
                    swal(
                        'El proyecto!',
                        'Se agrego correctamente.',
                        'success'
                    );
                    setTimeout(function () {
                        location.reload();
                    }, 2000)
                } else {
                    swal(
                        'Ooops!',
                        'No se puede cargar el producto',
                        'error'
                    );
                }
            }
        });
    });
    /* Eliminar registro */
    $('.borrar_registro').on('click', function (e) {
        e.preventDefault();
        var id = $(this).attr('data-id');
        var galeria = $(this).attr('data-tipo');
        swal({
            title: 'Estas seguro?',
            text: "Esta acción no se puede revertir!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si! Eliminar',
            cancelButtonText: 'Cancelar'

        }).then(function (result) {
            if (result.value) {

                $.ajax({
                    type: 'post',
                    data: {
                        'id': id,
                        'registro': 'eliminar'
                    },

                    url: 'modelo-' + galeria + '.php',
                    success: function (data) {
                        var resultado = JSON.parse(data);
                        if (resultado.respuesta == 'exito') {
                            swal(
                                'Eliminado!',
                                'Registro eliminado',
                                'success'
                            );
                            jQuery("[data-id='" + resultado.id_eliminado + "'").parents('tr').remove();
                        } else {
                            swal(
                                'Error!',
                                'No se pudo eliminar, intente de nuevo.',
                                'error'
                            );

                        }
                    }
                });
            }
        });

    });
});
/**
 *
 * This script is used for performing actions like create, remove, and update in the Education module
 *
 * @author Fernando Defez
 *
 * */

const URL = "http://localhost/module/education";

$("form").submit(function (event) {
    $(".form-control").removeClass("is-invalid");
    $(".invalid-feedback").remove();
    let formData = {
        level:      $("#level").val(),
        degree:     $("#degree").val(),
        institute:  $("#institute").val(),
        startedAt:  $("#startedAt").val(),
        endedAt:    $("#endedAt").val(),
        details:    $("#details").val()
    };

    $.ajax({
        type: "POST",
        url: URL,
        data: formData,
        dataType: "json",
        encode: true,
    }).done(function (data) {
        if (!data.success) {
            if (data.errors.outofbounds) {
                Swal.fire({
                    icon: 'error',
                    title: 'Límite alcanzado',
                    text: data.errors.outofbounds,
                });
            }
            if (data.errors.level) {
                $("#level").toggleClass("is-invalid");
                $("#level-group").append( `<div class='invalid-feedback'> ${data.errors.level} </div>`);
            }
            if (data.errors.degree) {
                $("#degree").toggleClass("is-invalid");
                $("#degree-group").append( `<div class='invalid-feedback'> ${data.errors.degree} </div>`);
            }
            if (data.errors.institute) {
                $("#institute").toggleClass("is-invalid");
                $("#institute-group").append(`<div class='invalid-feedback'> ${data.errors.institute} </div>` );
            }
            if (data.errors.startedAt) {
                $("#startedAt").toggleClass("is-invalid");
                $("#startedAt-group").append(`<div class='invalid-feedback'> ${data.errors.startedAt} </div>`);
            }
            if (data.errors.endedAt) {
                $("#endedAt").toggleClass("is-invalid");
                $("#endedAt-group").append(`<div class='invalid-feedback'> ${data.errors.endedAt} </div>`);
            }
            if (data.errors.details) {
                $("#details").toggleClass("is-invalid");
                $("#details-group").append(`<div class='invalid-feedback'> ${data.errors.details} </div>`);
            }
        } else {
            Swal.fire({
                icon: 'success',
                title: 'Datos guardados',
                text: 'Tu curriculum académico has sido ampliado correctamente'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                } else {
                    location.reload();
                }
                $('html,body').animate({scrollTop: document.body.scrollHeight},"fast");
            });
        }
    }).fail(function (data) {
        Swal.fire({
            icon: 'error',
            title: 'Server error',
            text: 'Ocurrió un error al intentar guardar tus datos',
        });
    });
    event.preventDefault();
});

/**
 * Removes an element of the module
 * @param id Number
 * */
function remove(id) {

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "DELETE",
                url: URL,
                data: { id },
                dataType: "json",
                encode: true,
            }).done(function (data) {
                if (!data.success) {
                    Swal.fire({
                        icon: "error",
                        title: 'No se pudo borrar el contenido seleccionado',
                        text: data.errors
                    });
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: 'Eliminado!',
                        text: 'El contenido seleccionado ha sido borrado exitosamente'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                        location.reload();
                    });
                }
            }).fail(function (data) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error del servidor',
                    text: 'Ocurrió un error al intentar borrar el elemento seleccionado',
                });
            });
        }
    });
}
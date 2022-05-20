<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Mis estudios </title>

    <!-- Custom fonts for this template-->
    <link href="/assets/core/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/assets/core/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Product Tour JavaScript Library --->
    <link href="/assets/core/product-tour/lib.css" rel="stylesheet">

    <!-- Module Toogle -->
    <link href="/assets/styles/toggle.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <?php include __DIR__ . "/layouts/sidebar.php" ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column m-0 p-0">

        <!-- Main Content -->
        <div id="content">

            <?php include __DIR__ . "/layouts/topbar.php" ?>

            <!-- Begin Page Content -->
            <div class="container-fluid p-3">

                <!-- Page Heading -->
                <div class="col-12 p-0 m-0">
                    <div class="d-flex p-0 m-0 justify-content-between flex-lg-row flex-column-reverse">
                        <div class="col-12 mb-4 col-lg-8">
                            <div class="row p-0 m-0 d-flex justify-content-between mb-4">
                                <h4 class="text-gray-900 font-weight-bold m-0">
                                    Mis estudios
                                </h4>
                                <div class="enable-module-toggle py-1">
                                    <label class="toggle m-0" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                           title="Habilitar módulo en mi plantilla">
                                        <input id="toggle" type="checkbox"<?php if (isset($data) && $data['user']->isEducationEnabled()) { echo "checked"; } ?>>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <dic class="row mb-4">
                                <div class="col-12">
                                    <button class="btn btn-success btn-sm m-0 font-weight-bold module-fields" type="button" data-toggle="modal" data-target="#store-modal">
                                        &plus; Añadir nivel escolar
                                    </button>
                                </div>
                            </dic>
                            <dic class="row mb-4">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <?php if (isset($data['degrees']) && !empty($data['degrees'])) {
                                                foreach ($data['degrees'] as $degree) {
                                                    ?>
                                                    <div class="card mb-4 shadow-sm">
                                                        <div class="card-body">
                                                            <p class="font-weight-bold mb-2 text-gray-900 h5">
                                                                <?php echo $degree->getLevel(); ?>
                                                            </p>
                                                            <p class="text-muted mb-2 text-gray-600">
                                                                <?php echo $degree->getDegree(); ?>
                                                            </p>
                                                            <p class="text-muted mb-2 text-gray-600">
                                                                <?php echo $degree->getInstitute(); ?>
                                                            </p>
                                                            <p class="mb-0 text-gray-600 font-weight-light">
                                                                <?php echo $degree->getDetails(); ?>
                                                            </p>
                                                        </div>
                                                        <div class="card-footer bg-white d-flex justify-content-between">
                                                            <div>
                                                                <?php echo $degree->getStartedAt() . ' - ' . $degree->getEndedAt(); ?>
                                                            </div>
                                                            <div class="dropdown no-arrow">
                                                                <a class="dropdown-toggle" role="button" id="dropdownMenuLink"
                                                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-600"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                                     aria-labelledby="dropdownMenuLink">
                                                                    <div class="dropdown-header">
                                                                        Actions
                                                                    </div>
                                                                    <button class="dropdown-item" onclick="show(<?php echo $degree->getId() ?>)">
                                                                        <i class="fa fa-pen text-gray-700 mr-2"></i> Editar
                                                                    </button>
                                                                    <button class="dropdown-item" onclick="destroy(<?php echo $degree->getId() ?>)">
                                                                        <i class="fa fa-trash text-gray-700 mr-2"> </i> Borrar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                            </dic>
                        </div>
                        <div class="col-12 mb-5 col-lg-4">
                            <div class="card m-0 shadow-sm p-0">
                                <div class="card-body">
                                    <p class="p-0 mt-2 text-gray-500 font-weight-bold h5">
                                        Plantilla
                                    </p>
                                    <div class="p-0 d-flex justify-content-start align-items-center mt-3">
                                        <p class="p-0 m-0 h2 text-gray-900 font-weight-bolder align-self-end">
                                            $49
                                        </p>
                                        <span class="align-self-end text-gray-00 mx-1">
                                            /anual
                                        </span>
                                    </div>
                                    <div class="p-0 mt-3 mb-1 d-flex align-items-center">
                                        <div class="p-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#0275d8" style="height: 20px; width: 20px;">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="col-fill p-0 mx-1">
                                            <span class="p-0 m-0 font-weight-light text-gray-600">
                                                Plantilla
                                            </span>
                                        </div>
                                    </div>
                                    <div class="p-0 mt-1 mb-3 d-flex align-items-center">
                                        <div class="p-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#0275d8" style="height: 20px; width: 20px;">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="col-fill p-0 mx-1">
                                            <span class="p-0 m-0 font-weight-light text-gray-600">
                                                Subdominio
                                            </span>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary font-weight-bold btn-block mt-3">
                                        Comprar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Store Modal -->
<div class="modal fade px-0" id="store-modal" tabindex="-1" role="dialog" aria-labelledby="store-modal-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-gray-900">
                    Añadir nivel escolar
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="store-module-form" action="<?php echo $_ENV['APP_URL'] . '/module/education/store'; ?>" method="post">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-12" id="level-group">
                            <label for="level" class="font-weight-bold text-gray-900"> Nivel escolar </label>
                            <select id="level" class="form-control form-control-sm" name="level">
                                <option value="" selected> Seleccionar nivel </option>
                                <option value="Licenciatura"> Licenciatura </option>
                                <option value="Maestria"> Maestria </option>
                                <option value="Doctorado"> Doctorado </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12" id="degree-group">
                            <label for="degree" class="font-weight-bold text-gray-900"> Título </label>
                            <input id="degree" class="form-control form-control-sm" type="text" placeholder="Título" name="degree"
                            >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12" id="institute-group">
                            <label for="institute" class="font-weight-bold text-gray-900">Institución</label>
                            <input id="institute" class="form-control form-control-sm" type="text" placeholder="Institución educativa" name="institute">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6" id="startedAt-group">
                            <label for="startedAt" class="font-weight-bold text-gray-900">
                                Inicio
                            </label>
                            <select id="startedAt" class="form-control form-control-sm" name="startedAt">
                                <option value="" selected> Año </option>
                                <option value="2022"> 2022 </option>
                            </select>
                        </div>
                        <div class="form-group col-6" id="endedAt-group">
                            <label for="endedAt" class="font-weight-bold text-gray-900">
                                Culminación
                            </label>
                            <select id="endedAt" class="form-control form-control-sm" name="endedAt">
                                <option value="" selected> Año </option>
                                <option value="2022"> 2022 </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12" id="details-group">
                            <label for="details "class="font-weight-bold text-gray-900"> Detalles </label>
                            <textarea id="details" rows="3" class="form-control" type="text" placeholder="Detalles" name="details"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cerrar </button>
                    <button type="submit" class="btn btn-primary"> Añadir </button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Update Modal -->
<div class="modal fade p-0" id="update-modal" tabindex="-1" role="dialog" aria-labelledby="updateModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-gray-900">
                    Actualizando nivel escolar
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="update-module-form" action="<?php echo $_ENV['APP_URL'] . '/module/education/store'; ?>" method="post">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-12" id="update-level-group">
                            <label for="update-level" class="font-weight-bold text-gray-900"> Nivel escolar </label>
                            <select id="update-level" class="form-control form-control-sm" name="level">
                                <option value="" selected> Seleccionar nivel </option>
                                <option value="Licenciatura"> Licenciatura </option>
                                <option value="Maestria"> Maestria </option>
                                <option value="Doctorado"> Doctorado </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12" id="update-degree-group">
                            <label for="update-degree" class="font-weight-bold text-gray-900"> Título </label>
                            <input id="update-degree" class="form-control form-control-sm" type="text" placeholder="Título" name="degree"
                            >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12" id="update-institute-group">
                            <label for="update-institute" class="font-weight-bold text-gray-900">Institución</label>
                            <input id="update-institute" class="form-control form-control-sm" type="text" placeholder="Institución educativa" name="institute">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6" id="update-startedAt-group">
                            <label for="update-startedAt" class="font-weight-bold text-gray-900">
                                Inicio
                            </label>
                            <select id="update-startedAt" class="form-control form-control-sm" name="startedAt">
                                <option value="" selected> Año </option>
                                <option value="2022"> 2022 </option>
                            </select>
                        </div>
                        <div class="form-group col-6" id="update-endedAt-group">
                            <label for="update-endedAt" class="font-weight-bold text-gray-900">
                                Culminación
                            </label>
                            <select id="update-endedAt" class="form-control form-control-sm" name="endedAt">
                                <option value="" selected> Año </option>
                                <option value="2022"> 2022 </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12" id="update-details-group">
                            <label for="update-details "class="font-weight-bold text-gray-900"> Detalles </label>
                            <textarea id="update-details" rows="3" class="form-control" type="text" placeholder="Detalles" name="details"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cerrar </button>
                    <button type="submit" class="btn btn-primary"> Actualizar </button>
                    <input type="number" class="d-none p-0 m-0 col-0" id="hidden-id" name="hiddenId">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include __DIR__ . "/layouts/footer.php" ?>

<!-- SweetAlert2 -->
<script src="/assets/core/sweetalert2/sweetalert2.js"> </script>

<!-- Script
<script type="text/javascript" src="/assets/scripts/education.js"></script> -->

<!-- Form Submit -->
<script>


    $('#store-modal').on('hide.bs.modal', function (e) {
        $(".form-control").val('');
        $(".form-control").removeClass("is-invalid");
        $(".invalid-feedback").remove();
    });

    $("#store-module-form").on('submit', function (event) {
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
            url: "http://localhost/module/education/store",
            data: formData,
            dataType: "json",
            encode: true,
        }).done(function (data) {
            if (!data.success) {
                if (data.errors.outofbounds) {
                    Swal.fire({
                        icon: "error",
                        title: "Límite alcanzado",
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
                    $("#institute-group").append( `<div class='invalid-feedback'> ${data.errors.institute} </div>`);
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
                if (data.errors.message) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Nivel escolar no añadido!',
                        text: data.errors.message
                    });
                }
            } else {
                Swal.fire({
                    icon: 'success',
                    title: 'Nivel escolar añadido!',
                    text: data.message
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload();
                    }
                    location.reload();
                    $('html,body').animate({scrollTop: document.body.scrollHeight},"fast");
                });
            }
        }).fail(function () {
            Swal.fire({
                icon: 'error',
                title: 'Whoops!',
                text: "Algo salió mal al establecer la conexión con el servidor"
            });
        });
        event.preventDefault();
    });


    function show(id) {
        $.ajax({
            type: "POST",
            url: "http://localhost/module/education/show",
            data: { id  },
            dataType: "json",
            encode: true,
        }).done(function (data) {
            if (data.success) {
                $("#update-level").val(data.values.level);
                $("#update-degree").val(data.values.degree);
                $("#update-institute").val(data.values.institute);
                $("#update-startedAt").val(data.values.started_at);
                $("#update-endedAt").val(data.values.ended_at);
                $("#update-details").val(data.values.details);
                $("#hidden-id").val(data.values.id);
                $("#update-modal").modal('show');
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error al recuperar nivel escolar!',
                    text: data.errors.message
                });
            }
        }).fail(function () {
            Swal.fire({
                icon: 'error',
                title: 'Whoops!',
                text: "Algo salió mal al establecer la conexión con el servidor"
            });
        });
    }

    $("#update-module-form").on('submit', function (event) {
        $(".form-control").removeClass("is-invalid");
        $(".invalid-feedback").remove();
        let formData = {
            id:         $("#hidden-id").val(),
            level:      $("#update-level").val(),
            degree:     $("#update-degree").val(),
            institute:  $("#update-institute").val(),
            startedAt:  $("#update-startedAt").val(),
            endedAt:    $("#update-endedAt").val(),
            details:    $("#update-details").val()
        };

        $.ajax({
            type: "PUT",
            url: "http://localhost/module/education/update",
            data: formData,
            dataType: "json",
            encode: true,
        }).done(function (data) {
            if (!data.success) {
                if (data.errors.position) {
                    $("#update-level").toggleClass("is-invalid");
                    $("#update-level-group").append( `<div class='invalid-feedback'> ${data.errors.level} </div>`);
                }
                if (data.errors.degree) {
                    $("#update-degree").toggleClass("is-invalid");
                    $("#update-degree-group").append( `<div class='invalid-feedback'> ${data.errors.degree} </div>`);
                }
                if (data.errors.institute) {
                    $("#update-institute").toggleClass("is-invalid");
                    $("#update-institute-group").append( `<div class='invalid-feedback'> ${data.errors.institute} </div>`);
                }
                if (data.errors.startedAt) {
                    $("#update-startedAt").toggleClass("is-invalid");
                    $("#update-startedAt-group").append(`<div class='invalid-feedback'> ${data.errors.startedAt} </div>`);
                }
                if (data.errors.endedAt) {
                    $("#update-endedAt").toggleClass("is-invalid");
                    $("#update-endedAt-group").append(`<div class='invalid-feedback'> ${data.errors.endedAt} </div>`);
                }
                if (data.errors.details) {
                    $("#update-details").toggleClass("is-invalid");
                    $("#update-details-group").append(`<div class='invalid-feedback'> ${data.errors.details} </div>`);
                }
                if (data.errors.message) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Nivel escolar no actualizado!',
                        text: data.errors.message
                    });
                }
            } else {
                Swal.fire({
                    icon: 'success',
                    title: 'Nivel escolar actualizado!',
                    text: data.message
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload();
                    }
                    location.reload();
                    $('html,body').animate({scrollTop: document.body.scrollHeight},"fast");
                });
            }
        }).fail(function () {
            Swal.fire({
                icon: 'error',
                title: 'Whoops!',
                text: "Algo salió mal al establecer la conexión con el servidor"
            });
        });
        event.preventDefault();
    });
    
    document.getElementById('toggle').addEventListener('click', function () {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        $.ajax({
            type: "PUT",
            url: 'http://localhost/module/education/toggle',
            data: { education_enabled : document.getElementById('toggle').checked },
            dataType: "json",
            encode: true,
        }).done(function (data) {
            if (!data.success) {
                Toast.fire({
                    icon: 'error',
                    title: 'Algo salió mal al intentar habilitar este módulo'
                });
            }
        }).fail(function () {
            Toast.fire({
                icon: 'error',
                title: "Conexión no establecida"
            });
        });
    });



    function destroy(id) {
        Swal.fire({
            title: "¿En realidad quieres borrar este elemento?",
            text: "No podrás revertir tu decisión",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sí, quiero borrarlo!",
            cancelButtonText: "Cancelar"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "DELETE",
                    url: "http://localhost/module/education/destroy",
                    data: { id },
                    dataType: "json",
                    encode: true,
                }).done(function (data) {
                    if (!data.success) {
                        Swal.fire({
                            icon: "error",
                            title: "Whoops!",
                            text: data.errors.message
                        });
                    } else {
                        Swal.fire({
                            icon: "success",
                            title: "Eliminado!",
                            text: data.message
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                            location.reload();
                        });
                    }
                }).fail(function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Whoops!',
                        text: "Algo salió mal al establecer la conexión con el servidor"
                    });
                });
            }
        });
    }

</script>

</body>

</html>






<!--
Product Tour Library JavaScript
<script src="/assets/core/product-tour/lib.js"></script>
<script>
    /**
     * Product Tour JavaScript Library
     *
     *
     * */
    let isActive = localStorage.getItem('product-tour-is-active');
    if (isActive === null) {

        let tourOptions = {
            options: {
                darkLayerPersistence: true,
                next: 'Next',
                prev: 'Previous',
                finish: 'Okay!',
                mobileThreshold: 768
            },
            tips: [
                {
                    title: 'Módulo',
                    description: 'Este es el nombre del módulo',
                    selector: '.module',
                    x: 50,
                    y: 50,
                    offx: 0,
                    offy: 19,
                    position: 'bottom',
                    onSelected: false
                },
                {
                    title: 'Habilitar sección',
                    description: 'Esta opción te permite habilitar esta sección en tu plantilla',
                    selector: '.enable-module-toggle',
                    x: 50,
                    y: 50,
                    offx: -32,
                    offy: -17,
                    position: 'left', onSelected: false
                },
                {
                    title: 'Campos del módulo',
                    description: 'Aquí podrás agregar un nuevo contenido',
                    selector: '.module-fields',
                    x: 50,
                    y: 50,
                    offx: -32,
                    offy: -17,
                    position: 'left', onSelected: false
                },
                {
                    title: 'Contenido del módulo',
                    description: 'Aquí se muestra todo el contenido agregado',
                    selector: '.module-content',
                    x: 50,
                    y: 50,
                    offx: 0,
                    offy: 0,
                    position: 'left', onSelected: false
                }
            ]
        };
        ProductTourJS.init(tourOptions);
        ProductTourJS.start();
    }
</script> -->
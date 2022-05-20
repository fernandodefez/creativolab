<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Mis experiencias </title>

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
                                    Mis experiencias
                                </h4>
                                <div class="enable-module-toggle py-1">
                                    <label class="toggle m-0" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                           title="Habilitar módulo en mi plantilla">
                                        <input id="toggle" type="checkbox"<?php if (isset($data) && $data['user']->areExperiencesEnabled()) { echo "checked"; } ?>>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <dic class="row mb-4">
                                <div class="col-12">
                                    <button class="btn btn-success btn-sm m-0 font-weight-bold module-fields" type="button" data-toggle="modal" data-target="#storeModal">
                                        &plus; Añadir experiencia
                                    </button>
                                </div>
                            </dic>
                            <dic class="row mb-4">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <?php if (isset($data['experiences']) && !empty($data['experiences'])) {
                                                foreach ($data['experiences'] as $experience) {
                                            ?>
                                            <div class="card mb-4 shadow-sm">
                                                <div class="card-body">
                                                    <p class="font-weight-bold mb-2 text-gray-900 h5">
                                                        <?php echo $experience->getPosition(); ?>
                                                    </p>
                                                    <p class="text-muted mb-2 text-gray-600">
                                                        <?php echo $experience->getCompany(); ?>
                                                    </p>
                                                    <p class="mb-0 text-gray-600 font-weight-light">
                                                        <?php echo $experience->getDetails(); ?>
                                                    </p>
                                                </div>
                                                <div class="card-footer bg-white d-flex justify-content-between">
                                                    <div>
                                                        <?php echo $experience->getStartedAt() . ' - ' . $experience->getEndedAt(); ?>
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
                                                            <button class="dropdown-item" onclick="show(<?php echo $experience->getId() ?>)">
                                                                <i class="fa fa-pen text-gray-700 mr-2"></i> Editar
                                                            </button>
                                                            <button class="dropdown-item" onclick="destroy(<?php echo $experience->getId() ?>)">
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
<div class="modal fade px-0" id="storeModal" tabindex="-1" role="dialog" aria-labelledby="storeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-gray-900">
                    Añadir experiencia
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="storeModuleFields" action="<?php echo $_ENV['APP_URL'] . '/module/experience'; ?>" method="post">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-12" id="position-group">
                            <label for="position" class="font-weight-bold text-gray-900"> Puesto </label>
                            <input id="position" class="form-control form-control-sm" type="text" placeholder="Puesto" name="position">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12" id="company-group">
                            <label for="company" class="font-weight-bold text-gray-900"> Empresa </label>
                            <input id="company" class="form-control form-control-sm" type="text" placeholder="Empresa" name="company">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6" id="startedAt-group">
                            <label for="startedAt" class="font-weight-bold text-gray-900">
                                Fecha de ingreso
                            </label>
                            <input type="date" class="form-control form-control-sm" id="startedAt" name="startedAt">
                        </div>
                        <div class="form-group col-6" id="endedAt-group">
                            <label for="endedAt" class="font-weight-bold text-gray-900">
                                Fecha de salida
                            </label>
                            <input type="date" class="form-control form-control-sm" id="endedAt" name="endedAt">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12" id="details-group">
                            <label for="details" class="text-gray-900 font-weight-bold"> Detalles </label>
                            <textarea id="details" rows="3" class="form-control form-control-sm" type="text" placeholder="Detalles" name="details"></textarea>
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
<div class="modal fade p-0" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-gray-900">
                    Actualizando experiencia
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="updateModuleFields" action="<?php echo $_ENV['APP_URL'] . '/module/experience'; ?>">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-12" id="update-position-group">
                            <label for="updatePosition" class="font-weight-bold text-gray-900"> Puesto </label>
                            <input id="updatePosition" class="form-control form-control-sm" type="text" placeholder="Puesto" name="updatePosition">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12" id="update-company-group">
                            <label for="updateCompany" class="font-weight-bold text-gray-900"> Empresa </label>
                            <input id="updateCompany" class="form-control form-control-sm" type="text" placeholder="Empresa" name="updateCompany">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6" id="update-startedAt-group">
                            <label for="updateStartedAt" class="font-weight-bold text-gray-900">
                                Fecha de ingreso
                            </label>
                            <input type="date" class="form-control form-control-sm" id="updateStartedAt" name="updateStartedAt">
                        </div>
                        <div class="form-group col-6" id="update-endedAt-group">
                            <label for="updateEndedAt" class="font-weight-bold text-gray-900">
                                Fecha de salida
                            </label>
                            <input type="date" class="form-control form-control-sm" id="updateEndedAt" name="updateEndedAt">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12" id="update-details-group">
                            <label for="updateDetails" class="text-gray-900 font-weight-bold"> Detalles </label>
                            <textarea id="updateDetails" rows="3" class="form-control form-control-sm" type="text" placeholder="Detalles" name="updateDetails">
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cerrar </button>
                    <button type="submit" class="btn btn-primary"> Actualizar </button>
                    <input type="number" class="d-none p-0 m-0 col-0" id="hiddenId" name="hiddenId">
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

    const URL = "http://localhost/module/experience";


    $('#storeModal').on('hide.bs.modal', function (e) {
        $(".form-control").val('');
        $(".form-control").removeClass("is-invalid");
        $(".invalid-feedback").remove();
    });

    $("#storeModuleFields").on('submit', function (event) {
        $(".form-control").removeClass("is-invalid");
        $(".invalid-feedback").remove();
        let formData = {
            position:   $("#position").val(),
            company:    $("#company").val(),
            startedAt:  $("#startedAt").val(),
            endedAt:    $("#endedAt").val(),
            details:    $("#details").val()
        };

        $.ajax({
            type: "POST",
            url: "http://localhost/module/experience/store",
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
                if (data.errors.position) {
                    $("#position").toggleClass("is-invalid");
                    $("#position-group").append( `<div class='invalid-feedback'> ${data.errors.position} </div>`);
                }
                if (data.errors.company) {
                    $("#company").toggleClass("is-invalid");
                    $("#company-group").append( `<div class='invalid-feedback'> ${data.errors.company} </div>`);
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
                        title: 'Experiencia no añadida!',
                        text: data.errors.message
                    });
                }
            } else {
                Swal.fire({
                    icon: 'success',
                    title: 'Experiencia añadida!',
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

    $("#updateModuleFields").on('submit', function (event) {
        $(".form-control").removeClass("is-invalid");
        $(".invalid-feedback").remove();
        let formData = {
            id:         $("#hiddenId").val(),
            position:   $("#updatePosition").val(),
            company:    $("#updateCompany").val(),
            startedAt:  $("#updateStartedAt").val(),
            endedAt:    $("#updateEndedAt").val(),
            details:    $("#updateDetails").val()
        };

        $.ajax({
            type: "PUT",
            url: "http://localhost/module/experience/update",
            data: formData,
            dataType: "json",
            encode: true,
        }).done(function (data) {
            if (!data.success) {
                if (data.errors.position) {
                    $("#updatePosition").toggleClass("is-invalid");
                    $("#update-position-group").append( `<div class='invalid-feedback'> ${data.errors.position} </div>`);
                }
                if (data.errors.company) {
                    $("#updateCompany").toggleClass("is-invalid");
                    $("#update-company-group").append( `<div class='invalid-feedback'> ${data.errors.company} </div>`);
                }
                if (data.errors.startedAt) {
                    $("#updateStartedAt").toggleClass("is-invalid");
                    $("#update-startedAt-group").append(`<div class='invalid-feedback'> ${data.errors.startedAt} </div>`);
                }
                if (data.errors.endedAt) {
                    $("#updateEndedAt").toggleClass("is-invalid");
                    $("#update-endedAt-group").append(`<div class='invalid-feedback'> ${data.errors.endedAt} </div>`);
                }
                if (data.errors.details) {
                    $("#updateDetails").toggleClass("is-invalid");
                    $("#update-details-group").append(`<div class='invalid-feedback'> ${data.errors.details} </div>`);
                }
                if (data.errors.message) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Experiencia no actualizada!',
                        text: data.errors.message
                    });
                }
            } else {
                Swal.fire({
                    icon: 'success',
                    title: 'Experiencia actualizada!',
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
            url: 'http://localhost/module/experiences/toggle',
            data: { experiences_enabled : document.getElementById('toggle').checked },
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






    function show(id) {
        $.ajax({
            type: "POST",
            url: "http://localhost/module/experience/show",
            data: { id  },
            dataType: "json",
            encode: true,
        }).done(function (data) {
            if (data.success) {
                $("#updatePosition").val(data.values.position);
                $("#updateCompany").val(data.values.company);
                $("#updateStartedAt").val(data.values.started_at);
                $("#updateEndedAt").val(data.values.ended_at);
                $("#updateDetails").val(data.values.details);
                $("#hiddenId").val(data.values.id);
                $("#updateModal").modal('show');
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error al recuperar experiencia!',
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
                    url: "http://localhost/module/experience/destroy",
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
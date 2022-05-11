<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Educación</title>

    <!-- Custom fonts for this template-->
    <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Product Tour JavaScript Library --->
    <link href="/assets/vendor/product-tour/lib.css" rel="stylesheet">

    <!-- Toogle -->
    <link href="/assets/css/toggle.css" rel="stylesheet">

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
                <div class="px-1 d-flex justify-content-between">
                    <h1 class="h3 mb-4 text-gray-800 px-2 font-weight-bold module">
                        Mi educación
                    </h1>
                    <div class="enable-module-toggle">
                        <label class="toggle" data-bs-toggle="tooltip" data-bs-placement="bottom"
                               title="Show module">
                            <input type="checkbox"
                                   <?php
                                   if (isset($data) && $data['user']->isEducationEnabled()) {
                                       echo "checked";
                                   }
                                   ?>
                                   >
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <!-- Content Row -->
                <div class="row p-0 m-0">

                    <div class="col-12 mb-4">
                        <p class="text-gray-900 mb-4">Agregar nivel educativo</p>
                        <form class="module-fields">
                            <div class="form-row">
                                <div class="form-group col-md-3" id="level-group">
                                    <label for="level">Nivel escolar</label>
                                    <select id="level" class="form-control custom-select" name="level">
                                        <option value="" selected>Seleccionar nivel</option>
                                        <option value="Licenciatura"> Licenciatura </option>
                                        <option value="Maestria"> Maestria </option>
                                        <option value="Doctorado"> Doctorado </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-9" id="degree-group">
                                    <label for="degree"> Título </label>
                                    <input
                                            id="degree"
                                            class="form-control"
                                            type="text"
                                            placeholder="Título"
                                            name="degree"
                                    >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8" id="institute-group">
                                    <label for="institute">Institución</label>
                                    <input
                                            id="institute"
                                            class="form-control"
                                            type="text"
                                            placeholder="Institución educativa"
                                            name="institute"
                                    >
                                </div>
                                <div class="form-group col-md-2" id="startedAt-group">
                                    <label for="startedAt">Inicio</label>
                                    <select id="startedAt" class="form-control custom-select" name="startedAt">
                                        <option value="" selected>Año</option>
                                        <option value="2022"> 2022 </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2" id="endedAt-group">
                                    <label for="endedAt">Culminación</label>
                                    <select id="endedAt" class="form-control custom-select" name="endedAt">
                                        <option value="" selected>Año</option>
                                        <option value="2022"> 2022 </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" id="details-group">
                                <label for="details">Detalles</label>
                                <input
                                        id="details"
                                        class="form-control"
                                        type="text"
                                        placeholder="Detalles"
                                        name="details"
                                >
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary font-weight-bold shadow-sm">
                                    Agregar
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Content Row -->
                </div>
                <!-- /.container-fluid -->

                <div class="col-12 p-0 m-0">
                    <div class="col-12 d-flex flex-wrap p-0">
                        <?php
                        if (isset($data['degrees']) && !empty($data['degrees'])) {
                            $degress = $data['degrees'];

                            foreach ($degress as $degree) {

                        ?>
                            <div class="col-12 col-lg-6">
                                <div class="card mb-4 shadow-sm">
                                    <div class="card-body">
                                        <p class="font-weight-bold mb-2 text-gray-900 h5">
                                            <?php echo $degree->getDegree() ?>
                                        </p>
                                        <p class="text-muted mb-2 text-gray-600 font-italic">
                                            <?php echo $degree->getLevel() ?>
                                        </p>
                                        <p class="text-muted mb-2 text-gray-600">
                                            <?php echo $degree->getInstitute() ?>
                                        </p>
                                        <p class="mb-0 text-gray-500">
                                            <?php echo $degree->getDetails() ?>
                                        </p>
                                    </div>
                                    <div class="card-footer bg-white d-flex justify-content-between font-italic">
                                        <div>
                                            <?php echo $degree->getStartedAt() . " - " . $degree->getEndedAt()  ?>
                                        </div>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" role="button" id="dropdownMenuLink"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-600"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                 aria-labelledby="dropdownMenuLink">
                                                <div class="dropdown-header">Actions</div>
                                                <a class="dropdown-item"
                                                   href="<?php echo $_ENV['APP_URL'] . $_SERVER['REQUEST_URI'] . "/" .$degree->getId() ?>">
                                                    <i class="fa fa-pen text-gray-700 mr-2"> </i> Editar </a>
                                                <button class="dropdown-item" onclick="remove(<?php echo $degree->getId()?>);">
                                                    <i class="fa fa-trash text-gray-700 mr-2"> </i> Borrar </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            }
                        }
                        ?>

                    </div>
                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
</div>
<!-- End of Page Wrapper -->

<?php include __DIR__ . "/layouts/footer.php" ?>


<!-- SweetAlert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"> </script>

<!-- Product Tour Library JavaScript -->
<script src="/assets/vendor/product-tour/lib.js"></script>

<!-- Form Submit -->
<script>

    /**
     * Delete Processing
     * */
    function remove(id) {
        $.ajax({
            type: "DELETE",
            url: "<?php echo $_ENV['APP_URL'] . $_SERVER['REQUEST_URI'] ?>",
            data: { id },
            dataType: "json",
            encode: true,
        }).done(function (data) {
            if (!data.success) {
                Swal.fire({
                    icon: "error",
                    title: 'Ocurrió un error al intentar eliminar el elemento',
                    text: data.errors
                });
            } else {
                Swal.fire({
                    icon: 'success',
                    title: 'Elemento eliminado',
                    text: 'El elemento ha sido eliminado satisfactoriamente'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload();
                    } else {
                        location.reload();
                    }
                });
            }
        }).fail(function (data) {
            Swal.fire({
                icon: 'error',
                title: 'Server error',
                text: 'Ocurrió un error al intentar borrar el elemento',
            });
        });
    }

    $(document).ready(function () {

        /**
         * Product Tour JavaScript Library
         * */
        let isActive = localStorage.getItem('product-tour-is-active');

        if (isActive === "true") {
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
                        offy: 0,
                        position: 'bottom',
                        onSelected: false
                    },
                    {
                        title: 'Campos del módulo',
                        description: 'Estos son los campos que debes llenar para poder crear un contenido',
                        selector: '.module-fields',
                        x: 50,
                        y: 50,
                        offx: 0,
                        offy: 0,
                        position: 'top',
                        onSelected: false
                    },
                    {
                        title: 'Contenido de los módulos',
                        description: 'En esta parte se muestra el contenido creado',
                        selector: '.module-content',
                        x: 50,
                        y: 50,
                        offx: 0,
                        offy: 0,
                        position: 'top',
                        onSelected: false
                    },
                    {
                        title: 'Habilitar módulo',
                        description: 'El contenido de los este módulo se mostrara en tu plantilla en función de si está habilitada o desabilitada',
                        selector: '.enable-module-toggle',
                        x: 50,
                        y: 30,
                        offx: -10,
                        offy: 0,
                        position: 'left',
                        onSelected: false
                    }
                ]
            };

            ProductTourJS.init(tourOptions);
            ProductTourJS.start();
        }

        /**
         * Submit Processing
         * */
        $("form").submit(function (event) {
            $(".form-control").removeClass("is-invalid");
            $(".invalid-feedback").remove();
            let formData = {
                level: $("#level").val(),
                degree: $("#degree").val(),
                institute: $("#institute").val(),
                startedAt: $("#startedAt").val(),
                endedAt: $("#endedAt").val(),
                details: $("#details").val()
            };

            $.ajax({
                type: "POST",
                url: "<?php echo $_ENV['APP_URL'] . $_SERVER['REQUEST_URI'] ?>",
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
                        return
                    }
                    if (data.errors.level) {
                        $("#level").toggleClass("is-invalid");
                        $("#level-group").append(
                            `<div class='invalid-feedback'> ${data.errors.level} </div>`
                        );
                    }
                    if (data.errors.degree) {
                        $("#degree").toggleClass("is-invalid");
                        $("#degree-group").append(
                            `<div class='invalid-feedback'> ${data.errors.degree} </div>`
                        );
                    }
                    if (data.errors.institute) {
                        $("#institute").toggleClass("is-invalid");
                        $("#institute-group").append(
                            `<div class='invalid-feedback'> ${data.errors.institute} </div>`
                        );
                    }
                    if (data.errors.startedAt) {
                        $("#startedAt").toggleClass("is-invalid");
                        $("#startedAt-group").append(
                            `<div class='invalid-feedback'> ${data.errors.startedAt} </div>`
                        );
                    }
                    if (data.errors.endedAt) {
                        $("#endedAt").toggleClass("is-invalid");
                        $("#endedAt-group").append(
                            `<div class='invalid-feedback'> ${data.errors.endedAt} </div>`
                        );
                    }
                    if (data.errors.details) {
                        $("#details").toggleClass("is-invalid");
                        $("#details-group").append(
                            `<div class='invalid-feedback'> ${data.errors.details} </div>`
                        );
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
            }).fail(function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Server error',
                    text: 'Ocurrió un error al intentar guardar tus datos',
                });
            });
            event.preventDefault();
        });
    });

</script>

</body>

</html>
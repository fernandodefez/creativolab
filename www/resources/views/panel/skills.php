<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Mis habilidades </title>

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
                <div class="px-1 d-flex justify-content-between">
                    <h1 class="h3 mb-4 text-gray-800 px-2 font-weight-bold module">
                        Mis habilidades
                    </h1>
                    <!--
                    <div class="enable-module-toggle">
                        <label class="toggle" data-bs-toggle="tooltip" data-bs-placement="bottom"
                               title="Show module">
                            <input type="checkbox"

                                /*
                                if (isset($data) && $data['user']->isTestimonialsEnabled()) {
                                    echo "checked";
                                }*/

                            >
                            <span class="slider round"></span>
                        </label>
                    </div> -->
                </div>

                <!-- Content Row -->
                <div class="row p-0 m-0">

                    <!--
                    <div class="col-12 mb-4">
                        <p class="text-gray-900 mb-4">
                            Añadir un testimonio
                        </p>
                        <form class="module-fields">
                            <div class="form-row">
                                <div class="form-group col-md-3" id="level-group">
                                    <label for="level">
                                        Nivel escolar
                                    </label>
                                    <select id="level" class="form-control custom-select" name="level">
                                        <option value="" selected> Seleccionar nivel </option>
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
                    </div> -->

                    <!-- Content Row -->
                </div>
                <!-- /.container-fluid -->

                <!--
                <div class="col-12 p-0 m-0 module-content">
                    <div class="col-12 d-flex flex-wrap p-0">
                        <div class="col-12 col-lg-6">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <p class="font-weight-bold mb-2 text-gray-900 h5">
                                        Datos
                                    </p>
                                    <p class="text-muted mb-2 text-gray-600 font-italic">
                                        Datos
                                    </p>
                                    <p class="text-muted mb-2 text-gray-600">
                                        Datos
                                    </p>
                                    <p class="mb-0 text-gray-500">
                                        Datos
                                    </p>
                                </div>
                                <div class="card-footer bg-white d-flex justify-content-between font-italic">
                                    <div>
                                        Datos
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
                                            <a class="dropdown-item"
                                               href="">
                                                <i class="fa fa-pen text-gray-700 mr-2"> </i> Editar </a>
                                            <button class="dropdown-item" onclick="">
                                                <i class="fa fa-trash text-gray-700 mr-2"> </i> Borrar </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!--
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>
                            Copyright &copy; CreativoLab 2022
                        </span>
                    </div>
                </div>
            </footer>
            -->
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
</div>
<!-- End of Page Wrapper -->

<?php include __DIR__ . "/layouts/footer.php" ?>

<!-- SweetAlert2 -->
<script src="/assets/core/sweetalert2/sweetalert2.js"> </script>
<!-- Form Submit -->
<script>
    //Swal.fire('Any fool can use a computer');
</script>

</body>

</html>
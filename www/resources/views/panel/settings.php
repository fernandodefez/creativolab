<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Configuración </title>

    <!-- Custom fonts for this template-->
    <link href="/assets/core/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/assets/core/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<style>
    .divider {
        height: 1.15px;
        background: #cccccc;
    }
</style>

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
                                    Configuración
                                </h4>
                            </div>
                            <dic class="row mb-4">
                                <div class="col-12">
                                    <div class="card mb-4">
                                        <div class="card-body mb-0">
                                            <h5 class="card-title text-dark font-weight-bold">
                                                Foto de perfil
                                            </h5>
                                            <p class="card-text font-weight-light">
                                                Insertar formulario para cambiar la foto de perfil del usuario
                                                <ul>
                                                    <li>
                                                        input de tipo file
                                                    </li>
                                                    <li>
                                                        boton de guardar
                                                    </li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="card-body mb-0">
                                            <h5 class="card-title text-dark font-weight-bold">
                                                Correo electrónico
                                            </h5>
                                            <p class="card-text font-weight-light">
                                                Insertar formulario con
                                            <ul>
                                                <li>
                                                    correo actual
                                                </li>
                                                <li>
                                                    nuevo correo
                                                </li>
                                                <li>
                                                    boton de guardar
                                                </li>
                                            </ul>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <h5 class="card-title text-dark font-weight-bold"> Cambiar contraseña </h5>
                                            <p class="card-text font-weight-light">
                                                See resolved goodness felicity shy civility domestic had but.
                                            </p>
                                            <form id="change-password-form" class="mt-2">
                                                <div class="form-row">
                                                    <div class="form-group col-12">
                                                        <label for="change-password-form-current-password"> Contraseña actual </label>
                                                        <input type="password"
                                                               name="current-password"
                                                               class="form-control"
                                                               id="change-password-form-current-password"
                                                               placeholder="Escribe tu contraseña actual">
                                                    </div>
                                                    <!-- Divider -->
                                                    <div class="divider col-12 p-0 my-2 mb-4"> </div>
                                                    <div class="form-group col-12">
                                                        <label for="change-password-form-new-password"> Nueva contraseña </label>
                                                        <input type="password"
                                                               name="new-password"
                                                               class="form-control"
                                                               id="change-password-form-new-password"
                                                               placeholder="Escribe tu nueva contraseña">
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label for="change-password-form-confirm-new-password"> Confirmar nueva contraseña </label>
                                                        <input type="password"
                                                               name="confirm-new-password"
                                                               class="form-control"
                                                               id="change-password-form-confirm-new-password"
                                                               placeholder="Escribe tu nueva contraseña de nuevo">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary font-weight-bold" id="add-skill-form-submit">
                                                    Acutalizar contraseña
                                                </button>
                                            </form>
                                        </div>
                                    </div>
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

<?php include __DIR__ . "/layouts/footer.php" ?>

</body>

</html>
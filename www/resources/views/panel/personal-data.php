<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Datos personales </title>

    <!-- Custom fonts for this template-->
    <link href="/assets/core/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/assets/core/css/sb-admin-2.min.css" rel="stylesheet">

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
                <div class="px-1">
                    <h1 class="h3 mb-4 text-gray-800 px-2 font-weight-bold">Datos personales</h1>
                </div>

                <?php if (isset($data)) { var_dump($data); } ?>

                <!-- Content Row -->
                <div class="row p-0 m-0">

                    <div class="col-12 mb-4">
                        <!-- <p class="text-gray-900 mb-4">Agregar niveles educativos</p> -->
                        <div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-lg-3">
                                    <label>Primer nombre</label>
                                    <input class="form-control" type="text"
                                           readonly value="<?php echo $data['user']->getFirstName(); ?>">
                                </div>
                                <div class="form-group col-md-6 col-lg-3">
                                    <label>Segundo nombre</label>
                                    <input class="form-control" type="text"
                                           readonly value="<?php echo $data['user']->getMiddleName(); ?>">
                                </div>
                                <div class="form-group col-md-6 col-lg-3">
                                    <label>Apellido paterno</label>
                                    <input class="form-control" type="text"
                                           readonly value="<?php echo $data['user']->getFirstLastname(); ?>">
                                </div>
                                <div class="form-group col-md-6 col-lg-3">
                                    <label>Apellido materno</label>
                                    <input class="form-control" type="text"
                                           readonly value="<?php echo $data['user']->getSecondLastname(); ?>">
                                </div>
                            </div>
                        </div>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputState">Fecha de nacimiento</label>
                                    <input type="date" class="form-control" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Número celular</label>
                                    <input class="form-control" type="text"
                                           readonly value="<?php echo $data['user']->getPhoneNumber(); ?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Número telefónico</label>
                                    <input class="form-control" type="text" value="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-9">
                                    <label for="inputCity">Dirección</label>
                                    <input type="text" class="form-control" id="inputCity"
                                           placeholder="Dirección">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputCity">Código postal</label>
                                    <input type="text" class="form-control" id="inputCity"
                                           placeholder="Código postal">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                            </div>
                        </form>
                    </div>

                    <!-- Content Row -->

                </div>
                <!-- /.container-fluid -->

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

</body>

</html>
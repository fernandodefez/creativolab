<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sobre mi</title>

    <!-- Custom fonts for this template-->
    <link href="/assets/core/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
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
                        <h1 class="h3 mb-4 text-gray-800 px-2 font-weight-bold">
                            Sobre mi
                        </h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row p-0 m-0">

                        <div class="col-12 mb-4">
                            <!-- <p class="text-gray-900 mb-4">Agregar niveles educativos</p> -->
                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">
                                        Resumen
                                    </label>
                                    <textarea class="form-control" placeholder="Breve resumen sobre mi"
                                          id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">
                                        Redes sociales
                                    </label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text font-weight-bold text-primary d-flex justify-content-center"
                                                 style="width: 40px;">
                                                <i class="fab fa-facebook-f"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup"
                                               placeholder="https://www.facebook.com/perfil">
                                    </div>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text font-weight-bold text-danger d-flex justify-content-center"
                                                style="width: 40px;">
                                                <i class="fab fa-youtube"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup"
                                               placeholder="https://www.facebook.com/perfil">
                                    </div>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text font-weight-bold text-info d-flex justify-content-center"
                                                 style="width: 40px;">
                                                <i class="fab fa-twitter"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup"
                                               placeholder="https://www.facebook.com/perfil">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary shadow-sm">
                                        Guardar cambios
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; CreativoLab 2022</span>
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
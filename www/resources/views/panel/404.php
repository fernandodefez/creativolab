<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> 404 Not Found </title>

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
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <?php include __DIR__ . "/layouts/topbar.php" ?>

                <!-- Begin of 404 Error Page -->
                <div class="text-center p-5">
                    <img src="" alt="">
                    <div class="error mx-auto" data-text="404">
                        404
                    </div>
                    <p class="lead text-gray-800 mb-5 font-weight-bold">
                        Página no encontrada
                    </p>
                    <a href="<?php echo $_ENV['APP_URL'] . "/dashboard"?>">
                        &larr; Volver al dashboard
                    </a>
                </div>
                <!-- End of 404 Error Page -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>
                            Copyright &copy; CreativoLab 2022
                        </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <?php include __DIR__ . "/layouts/footer.php" ?>

</body>

</html>

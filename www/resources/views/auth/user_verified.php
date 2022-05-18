<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cuenta verificada</title>

    <link href="/assets/core/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="/assets/core/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top" style="height: 100vh; overflow: hidden;">

    <div id="wrapper" class="d-flex justify-center" style="height: 100%;">

        <div id="content-wrapper" class="d-flex flex-column justify-content-center" style="height: 100%;">

            <div class="text-center p-5">
                <div class="mx-auto mb-3">
                    <svg width="82px" height="82px" viewBox="0 0 72 72" id="emoji" xmlns="http://www.w3.org/2000/svg">
                        <g id="color">
                            <path fill="#b1cc33"
                                d="m61.5 23.3-8.013-8.013-25.71 25.71-9.26-9.26-8.013 8.013 17.42 17.44z" />
                        </g>
                        <g id="line">
                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                stroke-miterlimit="10" stroke-width="2"
                                d="m10.5 39.76 17.42 17.44 33.58-33.89-8.013-8.013-25.71 25.71-9.26-9.26z" />
                        </g>
                    </svg>
                </div>
                <h2 class="font-weight-bold">Cuenta verificada con éxito</h2>
                <p class="lead text-gray-800 mb-5">
                    Ahora puedes acceder a tu dashboard
                </p>
                <a href="<?php echo $_ENV['APP_URL'] . '/dashboard' ?>"
                    class="mb-4 btn btn-outline-primary font-weight-bold">
                    Ir a mi dashboard &rarr;
                </a>
            </div>

            <!-- Footer --->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; CreativoLab 2022</span>
                    </div>
                </div>
            </footer>
            <!---- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


</body>

</html>
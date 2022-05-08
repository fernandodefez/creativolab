<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cuenta no verificada</title>

    <!-- Custom fonts for this template-->
    <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top" style="height: 100vh; overflow: hidden;">

<!-- Page Wrapper -->
<div id="wrapper" class="d-flex justify-center" style="height: 100%;">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column justify-content-center" style="height: 100%;">

        <!-- User Not Verified Text -->
        <div class="text-center p-5">
            <div class="mx-auto mb-3">
                <svg width="82px" height="82px" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 473.931 473.931" style="enable-background:new 0 0 473.931 473.931;" xml:space="preserve">
                    <circle style="fill:#E84849;" cx="236.966" cy="236.966" r="236.966"/>
                    <path style="fill:#F4F5F5;" d="M429.595,245.83c0,16.797-13.624,30.417-30.417,30.417H74.73c-16.797,0-30.421-13.62-30.421-30.417
                    v-17.743c0-16.797,13.624-30.417,30.421-30.417h324.448c16.793,0,30.417,13.62,30.417,30.417V245.83z"/>
                </svg>
            </div>
            <h2 class="font-weight-bold">Cuenta no verificada</h2>
            <p class="lead text-gray-800 mb-5">
                Te hemos enviado un mensaje a
                <?php
                if (isset($data))
                {
                    echo "<span class='font-italic font-weight-bold'>". $data['email'] ."</span>";
                }
                ?>
                para poder verificar tu cuenta.
            </p>
            <a href="<?php echo $_ENV['APP_URL'] ?>" class="mb-4 btn btn-outline-primary font-weight-bold">
                &larr; Ir al inicio
            </a>
        </div>

        <!-- Footer --->
        <footer class="sticky-footer">
           <div class="container my-auto">
              <div class="copyright text-center my-auto">
                 <span>Copyright &copy; Your Website 2020</span>
              </div>
           </div>
        </footer>
        <!--- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Bootstrap core JavaScript-->
<script src="/assets/vendor/jquery/jquery.min.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/assets/js/sb-admin-2.min.js"></script>

</body>

</html>
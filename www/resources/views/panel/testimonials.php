<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Testimonios </title>

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
                                    Testimonios
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
                                        &plus; Añadir testimonio
                                    </button>
                                </div>
                            </dic>
                            <dic class="row mb-4">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                p
                                            </div>
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
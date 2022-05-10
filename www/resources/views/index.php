<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    -->

    <!-- Bootstrap CSS -->
    <link href="/assets/css/sb-admin-2.css" rel="stylesheet">


    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>Home</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        * {
            transition: 0.3s;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: rgb(255,255,255);
            background: linear-gradient(311deg, rgba(255,255,255,1) 66%, rgba(245,247,255,1) 76%, rgba(241,242,254,1) 82%, rgba(236,237,253,1) 88%, rgba(223,223,240,1) 96%, rgba(212,211,249,1) 100%, rgba(188,185,247,1) 100%);
        }

        ::-webkit-scrollbar {
            width: 0px;
        }

        /* X-Small devices (portrait phones, less than 576px) */
        /* No media query for `xs` since this is the default in Bootstrap */

        /* Small devices (landscape phones, 576px and up) */
        @media (min-width: 576px) { }

        /* Medium devices (tablets, 768px and up) */
        @media (max-width: 768px) { }

        /* Large devices (desktops, 992px and up) */
        @media (max-width: 992px) { }

        /* X-Large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) { }

        /* XX-Large devices (larger desktops, 1400px and up) */
        @media (min-width: 1400px) { }
    </style>
</head>

<body class="d-flex flex-column p-0 m-0" style="width: 100vw; overflow-y: scroll; overflow-x: hidden;">

<header class="col-12 p-0" style="min-height: 100vh;">
    <nav class="navbar navbar-expand-sm p-0 py-4 px-3 mb-5">
        <div class="col-12 col-sm-12 col-md-11 col-lg-11 col-xl-11 m-auto d-flex justify-content-end align-items-center">
            <div>
                <a name="" id="" class="text-decoration-none text-gray-900 font-weight-bold link" href="<?php echo $_ENV['APP_URL'] . "/login"?>">
                    Login
                </a>
                <span class="px-2 fw-bold text-secondary">|</span>
                <a name="" id="" class="text-decoration-none text-gray-900 font-weight-bold link" href="<?php echo $_ENV['APP_URL'] . "/register"?>">
                    Register
                </a>
            </div>
        </div>
    </nav>
    <div class="col-12 col-sm-12 col-md-11 col-lg-11 col-xl-10 m-auto d-flex justify-content-between px-3">
        <div class="col-12 d-block text-center">
            <h1 class="font-weight-bold mt-5 mb-2 text-center text-gray-900" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 4.1em !important;">
                CreativoLab
            </h1>
            <p class="text-muted mb-1 mx-auto col-10 col-md-8 col-lg-8 col-xl-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa officiis exercitationem doloremque dolores quisquam impedit facilis quasi eaque nihil.</p>
            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-primary btn-lg font-weight-bold mt-5">
                    Empezar
                </button>
                <p class="px-2">&ThinSpace;</p>
                <button type="button" class="btn btn-outline-primary btn-lg font-weight-bold mt-5" onclick="scrollDown()">
                    ¿Cómo funciona? <i class="bi bi-arrow-down"></i>
                </button>
            </div>
        </div>
    </div>
</header>

<main class="col-12">
    <section class="col-12 col-sm-12 col-md-11 col-lg-11 col-xl-11 m-auto d-flex flex-column justify-content-between" style="min-height: 100vh;">

        <div class="col-12 my-5 d-flex flex-column-reverse flex-md-row">
            <div class="text-start col-12 col-md-7 p-3">
                <div class="h-100 d-flex align-items-center">
                    <div class="card-body p-0">
                        <h3 class="card-title text-gray-900 font-weight-bold mb-3" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 2.3em">
                            Crea una cuenta
                        </h3>
                        <p class="card-text text-secondary">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Quas perspiciatis aut quos soluta, id sed aperiam recusandae molestiae.
                            Voluptates excepturi iste quos dolorum quia blanditiis optio corrupti fugiat reiciendis explicabo.</p>
                        <br>
                        <a class="btn btn-outline-primary font-weight-bold" href="#" role="button">
                            Crear <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-5 p-3 px-5">
                <div class="h-100 d-flex align-items-center" style="position: relative; z-index: 9;">
                    <div class="col-12 bg-white shadow-lg rounded h-100 d-flex align-items-center p-4">
                        <img class="card-img-top" src="assets/sign_in.svg" alt="">
                    </div>
                    <div class="col-12 rounded bg-primary" style="position: absolute; transform: rotate(-2.1deg); height: 80%; z-index: -9; left: -20px; width: 110%;">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="col-12 my-5 d-flex flex-column-reverse flex-md-row-reverse">
            <div class="text-start col-12 col-md-7 p-3">
                <div class="h-100 d-flex align-items-center">
                    <div class="card-body p-0">
                        <h3 class="card-title text-gray-900 font-weight-bold mb-3" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 2.3em">
                            Llena tu información
                        </h3>
                        <p class="card-text text-secondary">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Quas perspiciatis aut quos soluta, id sed aperiam recusandae molestiae.
                            Voluptates excepturi iste quos dolorum quia blanditiis optio corrupti fugiat reiciendis explicabo.</p>
                        <br>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-5 p-3 px-5">
                <div class="h-100 d-flex align-items-center" style="position: relative; z-index: 9;">
                    <div class="col-12 bg-white shadow-lg rounded h-100 d-flex align-items-center p-4">
                        <img class="card-img-top" src="assets/fill_information.svg" alt="">
                    </div>
                    <div class="col-12 rounded bg-primary"
                         style="position: absolute; transform: rotate(-2.1deg); height: 80%; z-index: -10; left: -20px; width: 110%;">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 my-5 d-flex flex-column-reverse flex-md-row">
            <div class="text-start col-12 col-md-7 p-3">
                <div class="h-100 d-flex align-items-center">
                    <div class="card-body p-0">
                        <h3 class="card-title text-gray-900 font-weight-bold mb-3" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 2.3em">
                            Compra tu subdominio
                        </h3>
                        <p class="card-text text-secondary">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Quas perspiciatis aut quos soluta, id sed aperiam recusandae molestiae.
                            Voluptates excepturi iste quos dolorum quia blanditiis optio corrupti fugiat reiciendis explicabo.</p>
                        <br>
                        <a name="" id="" class="btn btn-outline-primary btn-lg fw-bolder" href="#" role="button">Go <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-5 p-3 px-5">
                <div class="h-100 d-flex align-items-center" style="position: relative; z-index: 9;">
                    <div class="col-12 bg-white shadow-lg rounded h-100 d-flex align-items-center p-4">
                        <img class="card-img-top" src="assets/pay.svg" alt="">
                    </div>
                    <div class="col-12 rounded bg-primary"
                         style="position: absolute; transform: rotate(-2.1deg); height: 80%; z-index: -9; left: -20px; width: 110%;">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 my-5 d-flex flex-column-reverse flex-md-row-reverse">
            <div class="text-start col-12 col-md-7 p-3">
                <div class="h-100 d-flex align-items-center">
                    <div class="card-body p-0">
                        <h3 class="card-title text-gray-900 font-weight-bold mb-3" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 2.3em">
                            Ahora tu perfil es público
                        </h3>
                        <p class="card-text text-secondary">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Quas perspiciatis aut quos soluta, id sed aperiam recusandae molestiae.
                            Voluptates excepturi iste quos dolorum quia blanditiis optio corrupti fugiat reiciendis explicabo.</p>
                        <br>
                        <a name="" id="" class="btn btn-outline-primary btn-lg fw-bolder" href="#" role="button">Go <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-5 p-3 px-5">
                <div class="h-100 d-flex align-items-center" style="position: relative; z-index: 9;">
                    <div class="col-12 bg-white shadow-lg rounded h-100 d-flex align-items-center p-4">
                        <img class="card-img-top" src="assets/portfolio.svg" alt="">
                    </div>
                    <div class="col-12 rounded bg-primary"
                         style="position: absolute; transform: rotate(-2.1deg); height: 80%; z-index: -10; left: -20px; width: 110%;">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 my-5 d-flex flex-column-reverse flex-md-row">
            <div class="text-start col-12 col-md-7 p-3">
                <div class="h-100 d-flex align-items-center">
                    <div class="card-body p-0">
                        <h3 class="card-title text-gray-900 font-weight-bold mb-3" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 2.3em">
                            Recibe tu tarjeta de presentación
                        </h3>
                        <p class="card-text text-secondary">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Quas perspiciatis aut quos soluta, id sed aperiam recusandae molestiae.
                            Voluptates excepturi iste quos dolorum quia blanditiis optio corrupti fugiat reiciendis explicabo.</p>
                        <br>
                        <a name="" id="" class="btn btn-outline-primary btn-lg fw-bolder" href="#" role="button">Go <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-5 p-3 px-5">
                <div class="h-100 d-flex align-items-center" style="position: relative; z-index: 9;">
                    <div class="col-12 bg-white shadow-lg rounded h-100 d-flex align-items-center p-4">
                        <img class="card-img-top" src="assets/get_card.svg" alt="">
                    </div>
                    <div class="col-12 rounded bg-primary"
                         style="position: absolute; transform: rotate(-2.1deg); height: 80%; z-index: -9; left: -20px; width: 110%;">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 my-5 d-flex flex-column-reverse flex-md-row-reverse">
            <div class="text-start col-12 col-md-7 p-3">
                <div class="h-100 d-flex align-items-center">
                    <div class="card-body p-0">
                        <h3 class="card-title text-gray-900 font-weight-bold mb-3" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 2.3em">
                            Comparte tu tarjeta con los demás
                        </h3>
                        <p class="card-text text-secondary">In order to take advantage of the environmentsLorem ipsum dolor sit amet
                            consectetur adipisicing elit. Quas perspiciatis aut quos soluta, id sed aperiam recusandae molestiae.
                            Voluptates excepturi iste quos dolorum quia blanditiis optio corrupti fugiat reiciendis explicabo.</p>
                        <br>
                        <a name="" id="" class="btn btn-outline-primary btn-lg fw-bolder" href="#" role="button">Go <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-5 p-3 px-5">
                <div class="h-100 d-flex align-items-center" style="position: relative; z-index: 9;">
                    <div class="col-12 bg-white shadow-lg rounded h-100 d-flex align-items-center p-4">
                        <img class="card-img-top" src="assets/fill_information.svg" alt="">
                    </div>
                    <div class="col-12 rounded bg-primary"
                         style="position: absolute; transform: rotate(-2.1deg); height: 80%; z-index: -10; left: -20px; width: 110%;">
                    </div>
                </div>
            </div>
        </div>

    </section>
</main>

<script>

    function scrollDown() {
        window.scroll({
            top: 600,
            behavior: 'smooth'
        });
    }

</script>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>
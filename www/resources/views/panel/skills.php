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
                                    Habilidades
                                </h4>
                                <div class="enable-module-toggle py-1">
                                    <label class="toggle m-0" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                           title="Habilitar módulo en mi plantilla">
                                        <input id="toggle" type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <dic class="row mb-4">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card mb-4">
                                                <div class="card-body mb-0">
                                                    <h5 class="card-title text-dark font-weight-bold"> Crear categoría </h5>
                                                    <p class="card-text font-weight-light">
                                                        Aquí puedes agregar las categorías de tus habilidades; por ejemplo, web, moóvil, etc..
                                                    </p>
                                                    <form id="create-category-form" class="mt-2">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6" id="create-category-form-category-group">
                                                                <label for="create-category-form-category"> Categoría </label>
                                                                <input type="text"
                                                                       name="skill"
                                                                       class="form-control"
                                                                       id="create-category-form-category"
                                                                       placeholder="Establece la categoría">
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary font-weight-bold mx-0" id="create-category-form-category">
                                                            Crear
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="card-body" id="categories-list">

                                                </div>
                                            </div>
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <h5 class="card-title text-dark font-weight-bold"> Agregar habilidad </h5>
                                                    <p class="card-text font-weight-light">
                                                        Aquí puedes agregar tus habilidades
                                                    </p>
                                                    <form id="add-skill-form" class="mt-2">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="add-skill-form-skill"> Habilidad </label>
                                                                <input type="text"
                                                                       name="skill"
                                                                       class="form-control"
                                                                       id="add-skill-form-skill"
                                                                       placeholder="Escrbie tu habilidad">
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="add-skill-form-progress"> Progreso </label>
                                                                <div class="input-group mb-2">
                                                                    <input type="number"
                                                                           name="progress"
                                                                           class="form-control"
                                                                           min="1"
                                                                           max="100"
                                                                           id="add-skill-form-progress"
                                                                           placeholder="Progreso">
                                                                    <div class="input-group-prepend rounded">
                                                                        <div class="input-group-text">%</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="add-skill-form-category"> Categoría </label>
                                                                <select class="custom-select" id="add-skill-form-category" name="category" required>
                                                                    <option selected disabled value=""> Categoría </option>
                                                                    <option>...</option>
                                                                    <option>...</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary font-weight-bold" id="add-skill-form-submit">
                                                            Añadir
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between align-items-center px-1">
                                                        <div class="d-flex flex-column">
                                                            <p class="text-dark font-weight-bold m-0"> Habilidad </p>
                                                            <p class="small font-weight-light m-0"> Categoría </p>
                                                        </div>
                                                        <p class="mb-0"> 100% </p>
                                                        <button class="btn btn-outline-danger btn-sm">
                                                            Eliminar
                                                        </button>
                                                    </div>
                                                    <div class="divider col-12 p-0 my-2"> </div>
                                                </div>
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
            <!-- End of Main Content -->

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
    const BASE_URL = "http://localhost";

    fetchCategories();

    // POST
    $("#create-category-form").submit(function(event) {
        event.preventDefault();

        $(".form-control").removeClass("is-invalid");
        $(".invalid-feedback").remove();

        var category ={
            category: $("#create-category-form-category").val()
        }

        $.ajax({
            type: "POST",
            url: BASE_URL + "/api/v1/skills/categories",
            data: category,
            dataType: "json",
            encode: true,
        }).done(function (data) {
            console.log(data);
            if (!data.success) {
                /*
                if (data.errors.outofbounds) {
                    Swal.fire({
                        icon: "error",
                        title: "Límite alcanzado",
                        text: data.errors.outofbounds,
                    });
                }*/
                if (data.errors.category) {
                    $("#create-category-form-category").toggleClass("is-invalid");
                    $("#create-category-form-category-group").append( `<div class='invalid-feedback'> ${data.errors.category} </div>`);
                }
                if (data.errors.message) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Nombre de la categoria no añadido!',
                        text: data.errors.message
                    });
                }
            } else {
                Swal.fire({
                    icon: 'success',
                    title: 'Nueva categoria añadida!',
                    text: data.message
                }).then((result) => {
                    $("#create-category-form-category").val("");
                    fetchCategories();
                });
            }
        }).fail(function () {
            Swal.fire({
                icon: 'error',
                title: 'Whoops!',
                text: "Algo salió mal al establecer la conexión con el servidor"
            });
        });

    });

    // GET
    async function fetchCategories() {
        document.getElementById("categories-list").innerHTML =
            `<div class="d-flex justify-content-center">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>`;

        const response = await fetch(BASE_URL + '/api/v1/skills/categories');
        const data = await response.json();

        if (!response.ok) {
            Swal.fire({
                title: 'Error al traer las categorías!',
                text: "Quieres volver a traer las categorías?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, fetch them!'
            }).then(async (result) => {
                if (result.isConfirmed) {
                    fetchCategories();
                }
            });
        }

        let html = "";
        if (data.success) {
            if (data.categories.length === 0) {
                html =
                    `<div class="col-12 d-flex p-2 py-5 justify-content-center">
                    <p class="fw-bold mb-0"> Todavía no tienes categorías! </p>
                </div>`;
            } else {
                for (const category of data.categories) {
                    html +=
                        `<div class="d-flex justify-content-between align-items-center px-1">
                        <p class="text-dark font-weight-bold m-0"> ${category.category} </p>
                        <button class="btn btn-outline-danger btn-sm" onClick="console.log(${category.id})">
                            Eliminar
                        </button>
                    </div>
                    <div class="divider col-12 my-2">
                    </div>`;
                }
            }
        }
        document.getElementById("categories-list").innerHTML = "";
        document.getElementById('categories-list').innerHTML = html;
    }


    //DELETE
    function deleteCategory(id) {
        Swal.fire({
            title: "¿En realidad quieres borrar esta categoria?",
            text: "No podrás revertir tu decisión",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sí, quiero borrarla!",
            cancelButtonText: "Cancelar"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "DELETE",
                    url: "http://localhost/api/v1/skills/categories",
                    data: { id },
                    dataType: "json",
                    encode: true,
                }).done(function (data) {
                    if (!data.success) {
                        Swal.fire({
                            icon: "error",
                            title: "Whoops!",
                            text: data.errors.message
                        });
                    } else {
                        Swal.fire({
                            icon: "success",
                            title: "Eliminada!",
                            text: data.message
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                            location.reload();
                        });
                    }
                }).fail(function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Whoops!',
                        text: "Algo salió mal al establecer la conexión con el servidor"
                    });
                });
            }
        });
    }

</script>

</body>

</html>
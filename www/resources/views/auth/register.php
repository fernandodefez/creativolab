<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>Crear cuenta</title>

   <!-- Custom fonts for this template-->
   <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

   <!-- Custom styles for this template-->
   <link href="/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-white">

   <div class="container">

      <div class="card o-hidden border-0 my-3">
         <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
               <div class="col-lg-9 col-xl-7 col-md-11 col-12 mx-auto">
                  <div class="p-2 p-md-4 p-lg-5">
                     <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-5">Crear una cuenta</h1>
                     </div>
                     <form class="user" action="/register" method="POST">
                        <div class="form-group row mb-0">
                           <div class="col-sm-6 mb-4 mb-sm-3">
                               <label for="FirstName">Primer nombre</label>
                               <input type="text" class="form-control
                              <?php
                              if (
                                 isset($errors) &&
                                 isset($errors['first_name_error']) &&
                                 !empty($errors['first_name_error'])
                              ) {
                                 echo 'is-invalid';
                              } else {
                                 echo '';
                              }
                              ?>" <?php
                                    if (isset($data) && isset($data['first_name_value'])) {
                                       echo "value='" . $data['first_name_value'] . "' ";
                                    }
                                    ?>
                                                                     id="FirstName" placeholder="Primer nombre" name="firstName">
                              <?php
                              if (isset($errors) && isset($errors['first_name_error'])) {
                                 echo "<div class='invalid-feedback'>" . $errors["first_name_error"] . "</div>";
                              }
                              ?>
                           </div>
                           <div class="col-sm-6 mb-4 mb-sm-3">
                               <label for="exampleMiddleName">Segundo nombre</label>
                               <input type="text" class="form-control
                              <?php
                              if (
                                 isset($errors) &&
                                 isset($errors['middle_name_error']) &&
                                 !empty($errors['middle_name_error'])
                              ) {
                                 echo 'is-invalid';
                              } else {
                                 echo '';
                              }
                              ?>" <?php
                                    if (isset($data) && isset($data['middle_name_value'])) {
                                       echo "value='" . $data['middle_name_value'] . "'";
                                    }
                                    ?> id="exampleMiddleName" placeholder="Segundo nombre" name="middleName">
                              <?php
                              if (isset($errors) && isset($errors['middle_name_error'])) {
                                 echo "<div class='invalid-feedback'>" . $errors["middle_name_error"] . "</div>";
                              }
                              ?>
                           </div>
                           <div class="col-sm-6 mb-4 mb-sm-3">
                               <label for="exampleFisrtLastName">Apellido paterno</label>
                               <input type="text" class="form-control
                              <?php
                              if (
                                 isset($errors) &&
                                 isset($errors['first_lastname_error']) &&
                                 !empty($errors['first_lastname_error'])
                              ) {
                                 echo 'is-invalid';
                              } else {
                                 echo '';
                              }
                              ?>" <?php
                                    if (isset($data) && isset($data['first_lastname_value'])) {
                                       echo "value='" . $data['first_lastname_value'] . "'";
                                    }
                                    ?> id="exampleFisrtLastName" placeholder="Apellido paterno" name="firstLastname">
                              <?php
                              if (isset($errors) && isset($errors['first_lastname_error'])) {
                                 echo "<div class='invalid-feedback'>" . $errors['first_lastname_error'] . "</div>";
                              }
                              ?>
                           </div>
                           <div class="col-sm-6 mb-4 mb-sm-3">
                               <label for="exampleSecondLastName">Apellido materno</label>
                               <input type="text" class="form-control
                              <?php
                              if (
                                 isset($errors) &&
                                 isset($errors['second_lastname_error']) &&
                                 !empty($errors['second_lastname_error'])
                              ) {
                                 echo 'is-invalid';
                              } else {
                                 echo '';
                              }
                              ?>" <?php
                                    if (isset($data) && isset($data['second_lastname_value'])) {
                                       echo "value='" . $data['second_lastname_value'] . "'";
                                    }
                                    ?> id="exampleSecondLastName" placeholder="Apellido materno" name="secondLastname">
                              <?php
                              if (isset($errors) && isset($errors['second_lastname_error'])) {
                                 echo "<div class='invalid-feedback'>" . $errors['second_lastname_error'] . "</div>";
                              }
                              ?>
                           </div>
                        </div>
                        <div class="form-group row mb-0">
                           <div class="col-sm-12 mb-4 mb-sm-3">
                               <label for="exampleInputEmail">Correo electrónico</label>
                               <input type="email" class="form-control
                           <?php
                           if (
                              isset($errors) &&
                              isset($errors['email_error']) &&
                              !empty($errors['email_error'])
                           ) {
                              echo 'is-invalid';
                           } else {
                              echo '';
                           }
                           ?>" <?php
                                 if (isset($data) && isset($data['email_value'])) {
                                    echo "value='" . $data['email_value'] . "'";
                                 }
                                 ?> id="exampleInputEmail" placeholder="Correo electrónico" name="email">
                              <?php
                              if (isset($errors) && isset($errors['email_error'])) {
                                 echo "<div class='invalid-feedback'>" . $errors['email_error'] . "</div>";
                              }
                              ?>
                           </div>
                        </div>
                         <div class="form-group row mb-0">
                             <div class="col-3 mb-4 mb-sm-3">
                                 <label for="exampleTemplateSelect">Código</label>
                                 <select name="template" id="exampleTemplateSelect" class="custom-select form-control col-12">
                                     <option value="52">52</option>
                                     <option value="1">1</option>
                                     <option value="595">595</option>
                                     <option value="34">34</option>
                                 </select>
                             </div>
                             <div class="col-9 mb-4 mb-sm-3">
                                 <label for="exampleInputCellPhone">Número celular</label>
                                 <input type="text" class="form-control
                           <?php
                                 if (
                                     isset($errors) &&
                                     isset($errors['cell_phone_error']) &&
                                     !empty($errors['cell_phone_error'])
                                 ) {
                                     echo 'is-invalid';
                                 } else {
                                     echo '';
                                 }
                                 ?>" <?php
                                 if (isset($data) && isset($data['cell_phone_value'])) {
                                     echo "value='" . $data['cell_phone_value'] . "'";
                                 }
                                 ?> id="exampleInputCellPhone" placeholder="Número celular" name="cellPhone">
                                 <?php
                                 if (isset($errors) && isset($errors['cell_phone_error'])) {
                                     echo "<div class='invalid-feedback'>" . $errors['cell_phone_error'] . "</div>";
                                 }
                                 ?>
                             </div>
                         </div>
                        <div class="form-group row mb-0">
                           <div class="col-sm-6 mb-4 mb-sm-3">
                               <label for="exampleInputPassword">Contraseña</label>
                               <input type="password" class="form-control
                              <?php
                              if (
                                 isset($errors) &&
                                 isset($errors['password_error']) &&
                                 !empty($errors['password_error'])
                              ) {
                                 echo 'is-invalid';
                              } else {
                                 echo '';
                              }
                              ?>" id="exampleInputPassword" placeholder="Contraseña" name="password">
                              <?php
                              if (isset($errors) && isset($errors['password_error'])) {
                                 echo "<div class='invalid-feedback'>" . $errors['password_error'] . "</div>";
                              }
                              ?>
                           </div>
                           <div class="col-sm-6 mb-4 mb-sm-3">
                               <label for="exampleRepeatPassword">Confirmar contraseña</label>
                               <input type="password" class="form-control
                              <?php
                              if (
                                 isset($errors) &&
                                 isset($errors['repeated_password_error']) &&
                                 !empty($errors['repeated_password_error'])
                              ) {
                                 echo 'is-invalid';
                              } else {
                                 echo '';
                              }
                              ?>" id="exampleRepeatPassword" placeholder="Confirmar contraseña" name="repeatedPassword">
                              <?php
                              if (isset($errors) && isset($errors['repeated_password_error'])) {
                                 echo "<div class='invalid-feedback'>" . $errors['repeated_password_error'] . "</div>";
                              }
                              ?>
                           </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="exampleTemplateSelect">Selecciona tu profesión</label>
                            <select name="template" id="exampleTemplateSelect" class="custom-select form-control col-12
                           <?php
                           if (
                              isset($errors) &&
                              isset($errors['template_error']) &&
                              !empty($errors['template_error'])
                           ) {
                              echo 'is-invalid';
                           } else {
                              echo '';
                           }
                           ?>">
                                <option value="0">Selecciona tu profesión</option>
                                <option value="1"
                                  <?php
                                  if (isset($data) && isset($data['template_value']) && $data['template_value'] == 1) {
                                    echo "selected";
                                  }
                                  ?>
                                >Agente inmobiliario
                                </option>
                                <option value="2"
                                    <?php
                                    if (isset($data) && isset($data['template_value']) && $data['template_value'] == 2) {
                                        echo "selected";
                                    }
                                    ?>
                                >Diseñador
                                </option>
                                <option value="3"
                                    <?php
                                    if (isset($data) && isset($data['template_value']) && $data['template_value'] == 3) {
                                        echo "selected";
                                    }
                                    ?>
                                >Ejecutivo
                                </option>
                           </select>
                           <?php
                           if (isset($errors) && isset($errors['template_error'])) {
                              echo "<div class='invalid-feedback'>" . $errors['template_error'] . "</div>";
                           }
                           ?>
                        </div>
                        <button href="/register" class="btn btn-primary btn-block font-weight-bold">
                           Crear cuenta
                        </button>
                        <!---
                        <hr>
                        <a href="index.html" class="btn btn-google btn-user btn-block">
                           <i class="fab fa-google fa-fw"></i> Register with Google
                        </a>
                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                           <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                        </a> -->
                     </form>
                     <hr>
                     <div class="text-center">
                        <a class="small" href="forgot-password.html">¿Has olvidado tu contraseña?</a>
                     </div>
                     <div class="text-center">
                        <a class="small" href="/login">¿Ya tienes una cuenta? Inicia sesión!</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </div>

   <!-- Bootstrap core JavaScript-->
   <script src="/assets/vendor/jquery/jquery.min.js"></script>
   <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   <!-- Core plugin JavaScript-->
   <script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

   <!-- Custom scripts for all pages-->
   <script src="/assets/js/sb-admin-2.min.js"></script>

</body>

</html>
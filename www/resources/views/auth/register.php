<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        Crear cuenta
    </title>

    <!-- Custom fonts for this template-->
    <link href="/assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/assets/core/css/sb-admin-2.min.css" rel="stylesheet">

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
                        <h1 class="h4 text-gray-900 mb-5 font-weight-bold">Crear una cuenta</h1>
                     </div>
                     <form class="user" action="<?php echo $_ENV['APP_URL'] . "/register"?>" method="POST">
                        <div class="form-group row mb-0">
                           <div class="col-sm-6 mb-4 mb-sm-3">
                               <label for="FirstName" class="text-gray-900 font-weight-bold m-0">
                                   Primer nombre
                               </label>
                               <label class="small d-block text-gray-700 mb-1">
                                   Obligatorio
                               </label>
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
                                <label for="FirstLastName" class="text-gray-900 font-weight-bold m-0">
                                    Apellido paterno
                                </label>
                                <label class="small d-block text-gray-700 mb-1">
                                    Obligatorio
                                </label>
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
                                ?> id="FirstLastName" placeholder="Apellido paterno" name="firstLastname">
                                <?php
                                if (isset($errors) && isset($errors['first_lastname_error'])) {
                                    echo "<div class='invalid-feedback'>" . $errors['first_lastname_error'] . "</div>";
                                }
                                ?>
                            </div>
                           <div class="col-sm-6 mb-4 mb-sm-3">
                               <label for="MiddleName" class="text-gray-900 font-weight-bold mb-1">
                                   Segundo nombre
                               </label>
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
                                    ?> id="MiddleName" placeholder="Segundo nombre" name="middleName">
                              <?php
                              if (isset($errors) && isset($errors['middle_name_error'])) {
                                 echo "<div class='invalid-feedback'>" . $errors["middle_name_error"] . "</div>";
                              }
                              ?>
                           </div>
                           <div class="col-sm-6 mb-4 mb-sm-3">
                               <label for="SecondLastName" class="text-gray-900 font-weight-bold mb-1">
                                   Apellido materno
                               </label>
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
                                    ?> id="SecondLastName" placeholder="Apellido materno" name="secondLastname">
                              <?php
                              if (isset($errors) && isset($errors['second_lastname_error'])) {
                                 echo "<div class='invalid-feedback'>" . $errors['second_lastname_error'] . "</div>";
                              }
                              ?>
                           </div>
                        </div>
                         <div class="form-group row mb-0">
                             <div class="col-4 mb-4 mb-sm-3">
                                 <label for="CodeSelect" class="text-gray-900 font-weight-bold m-0">
                                     Código
                                 </label>
                                 <label class="small d-block text-gray-700 mb-1">
                                     Obligatorio
                                 </label>
                                 <select name="code" id="CodeSelect" class="custom-select form-control col-12
                                     <?php
                                     if (
                                         isset($errors) &&
                                         isset($errors['code_error']) &&
                                         !empty($errors['code_error'])
                                     ) {
                                         echo 'is-invalid';
                                     } else {
                                         echo '';
                                     }
                                     ?>">
                                     <option value="0">Código</option>
                                     <?php
                                     if (isset($data)) {
                                         foreach ($data['codes'] as $code) {
                                             ?>
                                             <option value="<?php echo $code['code'] ?>"
                                                 <?php
                                                 if
                                                 (
                                                   isset($data) &&
                                                   isset($data['code_value']) &&
                                                   $data['code_value'] == $code['code']
                                                 )
                                                 {
                                                 echo "selected";
                                             }
                                             ?>>
                                                 <?php echo $code['short'] . ' (+'. $code['code'] .')' ?>
                                             </option>
                                             <?php
                                         }
                                     }
                                     ?>
                                 </select>
                                 <?php
                                 if (isset($errors) && isset($errors['code_error'])) {
                                     echo "<div class='invalid-feedback'>" . $errors['code_error'] . "</div>";
                                 }
                                 ?>
                             </div>
                             <div class="col-8 mb-4 mb-sm-3">
                                 <label for="PhoneNumber" class="text-gray-900 font-weight-bold m-0">
                                     Número de teléfono
                                 </label>
                                 <label class="small d-block text-gray-700 mb-1">
                                     Obligatorio
                                 </label>
                                 <input type="text" class="form-control
                           <?php
                                 if (
                                     isset($errors) &&
                                     isset($errors['phone_number_error']) &&
                                     !empty($errors['phone_number_error'])
                                 ) {
                                     echo 'is-invalid';
                                 } else {
                                     echo '';
                                 }
                                 ?>" <?php
                                 if (isset($data) && isset($data['phone_number_value'])) {
                                     echo "value='" . $data['phone_number_value'] . "'";
                                 }
                                 ?> id="PhoneNumber" placeholder="Número celular" name="phoneNumber">
                                 <?php
                                 if (isset($errors) && isset($errors['phone_number_error'])) {
                                     echo "<div class='invalid-feedback'>" . $errors['phone_number_error'] . "</div>";
                                 }
                                 ?>
                             </div>
                         </div>
                        <div class="form-group row mb-0">
                           <div class="col-sm-12 mb-4 mb-sm-3">
                               <label for="Email" class="text-gray-900 font-weight-bold m-0">
                                   Correo electrónico
                               </label>
                               <label class="small d-block text-gray-700 mb-1">
                                   Obligatorio
                               </label>
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
                                 ?> id="Email" placeholder="Correo electrónico" name="email">
                              <?php
                              if (isset($errors) && isset($errors['email_error'])) {
                                 echo "<div class='invalid-feedback'>" . $errors['email_error'] . "</div>";
                              }
                              ?>
                           </div>
                        </div>
                        <div class="form-group row mb-0">
                           <div class="col-sm-6 mb-4 mb-sm-3">
                               <label for="Password" class="text-gray-900 font-weight-bold m-0">
                                   Contraseña
                               </label>
                               <label class="small d-block text-gray-700 mb-1">
                                   Obligatorio
                               </label>
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
                              ?>" id="Password" placeholder="Contraseña" name="password">
                              <?php
                              if (isset($errors) && isset($errors['password_error'])) {
                                 echo "<div class='invalid-feedback'>" . $errors['password_error'] . "</div>";
                              }
                              ?>
                           </div>
                           <div class="col-sm-6 mb-4 mb-sm-3">
                               <label for="ConfirmPassword" class="text-gray-900 font-weight-bold m-0">
                                   Confirmar contraseña
                               </label>
                               <label class="small d-block text-gray-700 mb-1">
                                   Obligatorio
                               </label>
                               <input type="password" class="form-control
                              <?php
                              if (
                                 isset($errors) &&
                                 isset($errors['confirmed_password_error']) &&
                                 !empty($errors['confirmed_password_error'])
                              ) {
                                 echo 'is-invalid';
                              } else {
                                 echo '';
                              }
                              ?>" id="ConfirmPassword" placeholder="Confirmar contraseña" name="confirmedPassword">
                              <?php
                              if (isset($errors) && isset($errors['confirmed_password_error'])) {
                                 echo "<div class='invalid-feedback'>" . $errors['confirmed_password_error'] . "</div>";
                              }
                              ?>
                           </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="ProfessionSelect" class="text-gray-900 font-weight-bold m-0">
                                Selecciona tu profesión
                            </label>
                            <label class="small d-block text-gray-700 mb-1">
                                Obligatorio
                            </label>
                            <select name="profession" id="ProfessionSelect" class="custom-select form-control col-12
                            <?php
                            if
                            (
                              isset($errors) &&
                              isset($errors['profession_error']) &&
                              !empty($errors['profession_error'])
                            )
                            {
                              echo 'is-invalid';
                            }
                            else {
                                echo '';
                            }
                            ?>">
                                <option value="0"> Selecciona tu profesión </option>
                                <?php
                                if (isset($data)) {
                                    foreach ($data['professions'] as $profession) {
                                        ?>
                                        <option value="<?php echo $profession->getId(); ?>" <?php
                                        if (isset($data) && isset($data['profession_value']) && $data['profession_value'] == $profession->getId()) {
                                            echo "selected";
                                        }
                                        ?>><?php echo $profession->getProfession(); ?> </option>
                                        <?php
                                    }
                                }
                                ?>
                           </select>
                           <?php
                           if (isset($errors) && isset($errors['profession_error'])) {
                              echo "<div class='invalid-feedback'>" . $errors['profession_error'] . "</div>";
                           }
                           ?>
                        </div>
                        <button href="/register" class="btn btn-primary btn-block font-weight-bold">
                           Crear cuenta
                        </button>
                        <!--
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

   <!-- SweetAlert2 -->
   <script src="/assets/core/sweetalert2/sweetalert2.js"> </script>
   <script>
       <?php
       if (isset($errors) && !empty($errors['exception'])) {
           $errors['exception'];
           ?>
       Swal.fire(<?php echo $errors['exception']?>);
       <?php
       }
       ?>
   </script>

</body>

</html>
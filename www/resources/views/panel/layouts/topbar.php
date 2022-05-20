<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar --->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item d-flex align-items-center">
            <a href="<?php echo $_ENV['APP_URL'] . "/preview" ?>" class="btn btn-primary btn-sm font-weight-bold" target="_blank">
                <i class="fa fa-eye mr-1"></i> Previsualizar
            </a>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" id="userDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    <?php
                    if (isset($data)) {
                        echo $data['user']->getFirstName() . ' ' . $data['user']->getFirstLastname();
                    }
                    ?>
                </span>
                <!-- <img class="img-profile rounded-circle"
                     src="/storage/users/fernandodefez/juanlopez.jpg"> -->
                <div class="img-profile rounded-circle bg-gray-800 d-flex justify-content-center align-items-center p-0">
                    <span class="text-gray-100 small font-weight-bold p-0">
                        <?php
                        if (isset($data)) {
                            echo substr($data['user']->getFirstName(),0,1)  .
                                substr($data['user']->getFirstLastname(),0,1);
                        }
                        ?>
                    </span>
                </div>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                 aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-700"></i>
                    Mi cuenta
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-700"></i>
                    Configuración
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo $_ENV['APP_URL'] . "/logout"?>"
                   data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-700"></i>
                    Cerrar sesión
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->
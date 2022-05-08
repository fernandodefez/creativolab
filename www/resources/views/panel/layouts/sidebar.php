<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center"
       href="<?php echo $_ENV['APP_URL'] . '/dashboard'?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Creativo<sup> Lab</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item
    <?php
    if ($_SERVER['REQUEST_URI'] === "/dashboard") {
        echo "active";
    }
    ?>
    ">
        <a class="nav-link" href="<?php echo $_ENV['APP_URL'] . '/dashboard'?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Perfil
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item
    <?php
    if ($_SERVER['REQUEST_URI'] === "/profile/personal-data") {
        echo "active";
    }
    if ($_SERVER['REQUEST_URI'] === "/profile/about-me") {
        echo "active";
    }
    ?>
    ">
        <a class="nav-link
        <?php
        if ($_SERVER['REQUEST_URI'] === "/profile/personal-data" || $_SERVER['REQUEST_URI'] === "/profile/about-me") {
            echo "";
        } else {
            echo "collapsed";
        }
        ?>
        " href="" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="false" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-user"></i>
            <span>Mi perfil</span>
        </a>
        <div id="collapseTwo" class="collapse
        <?php
        if ($_SERVER['REQUEST_URI'] === "/profile/personal-data" || $_SERVER['REQUEST_URI'] === "/profile/about-me") {
            echo "show";
        } else {
            echo "";
        }
        ?>
        " aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item
                <?php
                if ($_SERVER['REQUEST_URI'] === "/profile/personal-data") {
                    echo "active";
                }?>
                "
                   href="<?php echo $_ENV['APP_URL'] . '/profile/personal-data'?>">Datos personales</a>
                <a class="collapse-item
                <?php
                if ($_SERVER['REQUEST_URI'] === "/profile/about-me") {
                    echo "active";
                }
                ?>
                ?>"
                   href="<?php echo $_ENV['APP_URL'] . '/profile/about-me'?>">Sobre mi</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading modules">
        Módulos
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-hand-scissors"></i>
            <span>Habilidades</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-globe"></i>
            <span>Idiomas</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item
    <?php
    if ($_SERVER['REQUEST_URI'] === "/education") {
        echo "active";
    }
    ?>
    ">
        <a class="nav-link" href="<?php echo $_ENV['APP_URL'] . '/education'?>">
            <i class="fas fa-fw fa-graduation-cap"></i>
            <span>Educación</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-book"></i>
            <span>Experiencia</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-briefcase"></i>
            <span>Portafolio</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-users"></i>
            <span>Testimonios</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu
    <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Habilidades</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item active" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>
    -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
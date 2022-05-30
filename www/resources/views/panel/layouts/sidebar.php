<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center"
       href="<?php echo $_ENV['APP_URL'] . '/dashboard'?>">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
            <svg width="40px" height="40px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.432 15C14.387 9.893 12 8.547 12 6V3h.5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5H8v3c0 2.547-2.387 3.893-4.432 9-.651 1.625-2.323 4 6.432 4s7.083-2.375 6.432-4zm-1.617 1.751c-.702.21-2.099.449-4.815.449s-4.113-.239-4.815-.449c-.249-.074-.346-.363-.258-.628.22-.67.635-1.828 1.411-3.121 1.896-3.159 3.863.497 5.5.497s1.188-1.561 1.824-.497a15.353 15.353 0 0 1 1.411 3.121c.088.265-.009.553-.258.628z"
                      fill="white" fill-opacity="1" stroke-opacity="1"/>
            </svg>
        </div> -->
        <div class="sidebar-brand-text">
            Creativo <sup> Lab </sup>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if ($_SERVER['REQUEST_URI'] === "/dashboard") { echo "active"; } ?> ">
        <a class="nav-link" href="<?php echo $_ENV['APP_URL'] . '/dashboard'?>">
            <i class="fas fa-fw fa-tachometer-alt"> </i> <span>
                Dashboard
            </span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Account -->
    <div class="sidebar-heading">
        Cuenta
    </div>
    <!-- Nav Item - Account Collapse Menu -->
    <li class="nav-item
        <?php
            echo ($_SERVER['REQUEST_URI'] === "/account/about" || $_SERVER['REQUEST_URI'] === "/account/settings") ? "active" : "";
        ?>">
        <a class="nav-link
        <?php
            echo ($_SERVER['REQUEST_URI'] === "/account/about" || $_SERVER['REQUEST_URI'] === "/account/settings") ? "" : "collapsed";
        ?>"
           href="" data-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="false" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-user"></i>
            <span>
                Cuenta
            </span>
        </a>
        <div id="collapseTwo" class="collapse
        <?php
        echo ($_SERVER['REQUEST_URI'] === "/account/about" || $_SERVER['REQUEST_URI'] === "/account/settings") ? "show" : "";
        ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="py-2 collapse-inner rounded bg-white">
                <a class="collapse-item
                <?php
                echo ($_SERVER['REQUEST_URI'] === "/account/about") ? "active" : "" ; ?>"
                   href="<?php echo $_ENV['APP_URL'] . '/account/about'?>"> Información </a>
                <a class="collapse-item
                <?php
                echo ($_SERVER['REQUEST_URI'] === "/account/settings") ? "active" : "" ; ?>"
                   href="<?php echo $_ENV['APP_URL'] . '/account/settings'?>"> Configuración </a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Modules -->
    <div class="sidebar-heading modules">
        Módulos
    </div>
    <!-- Nav Item - Skills -->
    <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] === "/skills") ? "active" : "" ;?>">
        <a class="nav-link" href="<?php echo $_ENV['APP_URL'] . '/skills'?>">
            <i class="fas fa-fw fa-hand-scissors"></i>
            <span>
                Habilidades
            </span>
        </a>
    </li>
    <!-- Nav Item - Education -->
    <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] === "/module/education") ? "active" : ""; ?>">
        <a class="nav-link" href="<?php echo $_ENV['APP_URL'] . '/module/education'?>">
            <i class="fas fa-fw fa-graduation-cap"></i>
            <span>
                Estudios
            </span>
        </a>
    </li>
    <!-- Nav Item - Work Experience -->
    <li class="nav-item <?php if ($_SERVER['REQUEST_URI'] === "/module/experiences") { echo "active"; } ?> tour">
        <a class="nav-link" href="<?php echo $_ENV['APP_URL'] . '/module/experiences'?>">
            <i class="fas fa-fw fa-book"></i>
            <span>
                Experiencia laboral
            </span>
        </a>
    </li>
    <!-- Nav Item - Portfolio -->
    <li class="nav-item <?php if ($_SERVER['REQUEST_URI'] === "/module/portfolio") { echo "active"; } ?>">
        <a class="nav-link" href="<?php echo $_ENV['APP_URL'] . '/module/portfolio'?>">
            <i class="fas fa-fw fa-briefcase"></i>
            <span>
                Portafolio
            </span>
        </a>
    </li>
    <!-- Nav Item - Testimonials -->
    <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] === "/testimonials") ? "active" : "" ;?>">
        <a class="nav-link" href="<?php echo $_ENV['APP_URL'] . '/testimonials'?>">
            <i class="fas fa-fw fa-users"></i>
            <span>
                Testimonios
            </span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline ">
        <button class="rounded-circle border-0" id="sidebarToggle">
        </button>
    </div>

</ul>
<!-- End of Sidebar -->
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom ">
    <link href="vista/css/style.css" rel="stylesheet">
    <?php
$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if ($link == "http://www.labtiunca.edu.mx/") {
    $link_img = "img/icono_lic_info_v5.png";
}
if ($link != "http://www.labtiunca.edu.mx/") {
    $link_img = "img/icono_lic_info_v5.png";
}
?>
    <div class="col align-self-center">
        <a href="http://www.labti.unca.edu.mx" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <img src=<?php echo $link_img; ?> alt="" width="300" height="120" class="d-inline-block align-text-top">

                <!-- <span class="fs-4">  LabTic </span> -->
        </a>
    </div>
    <div class="col align-self-end">
        <nav class="nav nav-pills navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent items_en_uso">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- Home -->
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="">Inicio</a>
                        </li>
                        <!-- áreas del laboratorio - lista desplegable -->
                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" role="button">Áreas</a>
                            <!-- Lista de las areas del laboratorio -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="dmenu">
                                <li>
                                    <a class="dropdown-item" href="../vista/areas.php#casa">Sistemas inteligentes y distribuidos</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="../vista/areas.php#casa2">Electronica</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="../vista/areas.php#casa3">Investigación y desarrollo de software</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="../vista/areas.php#casa4">Experiencia de usuario UX</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="../vista/areas.php#casa5">Redes</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Miembros del laboratorio - lista desplegable -->
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" role="button">Miembros</a>
                            <!-- Lista de miembros -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="../vista/miembros.php">Profesores investigadores</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/view/html/Colaboradores.php">Colaboradores</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/view/html/Servicio_Social.php">Servicio Social</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/view/html/Estancias_profesionales.php">Estancias profesionales</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="view/html/Alumni_Egresados.php">Alumnos Egresados</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Investigación - lista desplegable -->
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" role="button">Investigación</a>
                            <!-- Lista investigación -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="/view/html/Proyectos.php">Proyectos</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/view/html/Cuerpos_académicos.php">Cuerpos académicos</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Difusión - lista desplegable -->
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" role="button"> Difusión</a>
                            <!-- Lista difusión -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="/view/html/Historia.php">Historia</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="view/html/Noticias.php">Noticias</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/view/html/Eventos.php">Eventos</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/view/html/Multimedia.php">Multimedia</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Acerca de - lista desplegable  solo una pagina -->
                        <li class="nav-item">
                            <a href="" class="nav-link" id="navbarDropdown">Acerca de
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="row align-items-end">
        <div class="col-md-3 text-end align-self-start">
            <button type="button" class="btn btn-outline-primary me-2">Login</button>
            <!-- <button type="button" class="btn btn-primary">Sign-up</button> -->
        </div>
    </div>

</header>
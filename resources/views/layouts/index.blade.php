<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="img/favicon-32x32.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@200&family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <link rel="stylesheet" href="css/index.css">
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/a9e19848a9.js" crossorigin="anonymous"></script>
    <title>Pinturas Acuario RH</title>
</head>

<body id="contend-body">
    <header>
        <div class="box-user">
            <div>
                <div class="img-header">
                    <img src="img/logo-blanco-transparente.png" alt width="100%" srcset>
                </div>
                <div class="info-user">
                    <img src="img/equipo-videojuegos-futurista-iluminado-ia-generativa-discoteca.jpg" class="img-user" alt srcset>
                    <p>Jorge Jovani Diego German</p>
                </div>
            </div>
            <div class="conted-option">
                <nav>
                    <ul>
                        <li>
                            <a href="#" class="nav_a" title="Colaboradores">
                                <div class="box-option">
                                    <div>
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <p>
                                        Colaboradores
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav_a" title="Grupos">
                                <div class="box-option">
                                    <div>
                                        <i class="fa-solid fa-users"></i>
                                    </div>
                                    <p>
                                        Grupos
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav_a" title="Instancias">
                                <div class="box-option">
                                    <div>
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <p>
                                        Instancias
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav_a" title="Registros">
                                <div class="box-option">
                                    <div>
                                        <i class="fa-solid fa-clock"></i>
                                    </div>
                                    <p>
                                        Registros
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li id="report_options">
                            <a class="nav_a" title="Reportes">
                                <div class="box-option ">
                                    <i class="fa-solid fa-folder"></i>
                                    <p>
                                        Reportes
                                    </p>
                                </div>
                            </a>
                            <div id="box_nav_a">
                                <div>
                                    <a href="#" class="nav_a" title="Asistencia">
                                        <div class="box-option">
                                            <div>
                                                <i class="fa-solid fa-list-check"></i>
                                            </div>
                                            <p> Asistencia</p>
                                        </div>
                                    </a>
                                    <a href="#" class="nav_a" title="Fotografia">
                                        <div class="box-option">
                                            <div>
                                                <i class="fa-solid fa-image"></i>
                                            </div>
                                            <p>
                                                Fotografia
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li id="add_options">
                            <a class="nav_a" title="Reportes">
                                <div class="box-option ">
                                <i class="fa-sharp fa-solid fa-circle-plus fa-beat"></i>
                                    <p>
                                        Más opciones
                                    </p>
                                </div>
                            </a>
                            <div id="box_nav_a_add">
                                <div>
                                    <a href="/branch" class="nav_a" title="Departamentos">
                                        <div class="box-option">
                                            <div>
                                            <i class="fa-sharp fa-solid fa-building"></i>
                                            </div>
                                            <p>Departamentos</p>
                                        </div>
                                    </a>
                                    <a href="#" class="nav_a" title="Puestos">
                                        <div class="box-option">
                                            <div>
                                            <i class="fa-sharp fa-solid fa-stapler"></i>
                                        </div>
                                            <p>Puestos</p>
                                        </div>
                                    </a>
                                    <a href="#" class="nav_a" title="Tipo de Contratos">
                                        <div class="box-option">
                                            <div>
                                            <i class="fa-sharp fa-solid fa-file-signature"></i>
                                            </div>
                                            <p>Tipo de Contratos</p>
                                        </div>
                                    </a>
                                    <a href="#" class="nav_a" title="Tipo de Personal">
                                        <div class="box-option">
                                            <div>
                                            <i class="fa-sharp fa-solid fa-address-card"></i>
                                            </div>
                                            <p>Tipo de Personal</p>
                                        </div>
                                    </a>
                                    <a href="#" class="nav_a" title="Jornadas">
                                        <div class="box-option">
                                            <div>
                                            <i class="fa-sharp fa-solid fa-business-time"></i>
                                            </div>
                                            <p>Jornadas</p>
                                        </div>
                                    </a>
                                    <a href="#" class="nav_a" title="Sucursales">
                                        <div class="box-option">
                                            <div>
                                            <i class="fa-sharp fa-solid fa-city"></i>                                        </div>
                                            <p>Sucursales</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="setting">
            <nav>
                <ul>
                    <li>
                        <a href="#" class="nav_a" title="Cerrar Seción">
                            <div class="box-option">
                                <div>
                                    <i class="fa-solid fa-door-open"></i>
                                </div>
                                <p>
                                    Cerrar seción
                                </p>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="conted-section">
            @yield('contend')
        </section>
    </main>
</body>
<script src="js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
@yield('scripts')

</html>
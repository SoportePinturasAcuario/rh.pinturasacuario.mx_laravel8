<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="img/favicon-32x32.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a9e19848a9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/a9e19848a9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('head')
    <title>Pinturas Acuario RH</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg  bg-a">
        <div class="section logo">
            <img src="img/logo-pinturas-acuario.png" alt="Pinturas Acuario Logo" width="80%">
        </div>
        <div class="section user-setings">
            <!-- <img src="img/logo-pinturas-acuario.png" alt="Pinturas Acuario Logo" width="15%"> -->
        </div>
    </nav>
    <div class="box-container" id="box-container">
        <div class="sider-bar">
            <div class="container">
                <div class="row">
                    <nav>
                        <ul>
                            <li>
                                <a href="/">
                                    <div class="option-nav">
                                        <div class="icon">
                                            <i class="fa-regular fa-user"></i>
                                        </div>
                                        <div class="section">
                                            <p>Colaboradores</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="option-nav">
                                        <div class="icon">
                                            <i class="fa-regular fa-user"></i>
                                        </div>
                                        <div class="section">
                                            <p>Instancias</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr>
                            <li>
                                <a href="/enterprise_and_centers" title="Empresas y Centros">
                                    <div class="option-nav">
                                        <div class="icon">
                                            <i class="fa-solid fa-city"></i>
                                        </div>
                                        <div class="section">
                                            <p>Empresas y Centros</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="contentd">
            <div class="box-content">
                <div class="box-title">
                    @yield('title')
                </div>
                <div class="box-info">
                    @yield('contend')
                </div>
            </div>
        </div>
    </div>
    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('scripts')

</body>

</html>
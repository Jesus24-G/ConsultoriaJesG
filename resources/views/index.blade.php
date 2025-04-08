<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultoria SystemJG</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        body {
            /* background-color: black; */
        }

        .logo {
            text-shadow: 1px 1px 2px black, 0 0 5px blue, 0 0 10px darkblue;
            font-size: 30px;
            color: lightskyblue;
        }
    </style>
</head>

<body>

    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="#">DEV GB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-xl">
        <div class="header p-1 mt-4">
            <img src="{{ asset('img/web-dev-image.jpg') }}" class="img-fluid" alt="">
            <div class="header-titulo">
                <h1 class="logo">Consultoria Dev GB</h1>
            </div>
        </div>

    </div>

    <div class="diagonal-box">
        <h2 class="my-4 text-center text-white display-3 fw-bold">Servicios</h2>
        <div class="contenedor-servicios">

            <div class="card b-0 shadow zoom">
                <img src="{{ asset('img/app-movil.jpg') }}" alt="" class="card-img-top imagen-servicio">
                <div class="card-body">
                    <h4>Desarrollo de Aplicaciones Moviles</h4>
                </div>
            </div>

            <div class="card shadow zoom">
                <img src="{{ asset('img/dev-web.jpg') }}" alt="" class="card-img-top imagen-servicio">
                <div class="card-body">
                    <h4>Desarrollo de Sitios Web</h4>
                </div>
            </div>

            <div class="card shadow zoom">
                <img src="{{ asset('img/analisis.jpg') }}" alt="" class="card-img-top imagen-servicio">
                <div class="card-body">
                    <h4>Analisis</h4>
                </div>
            </div>

            <div class="card shadow zoom">
                <img src="{{ asset('img/administracion-linux.jpg') }}" alt="" class="card-img-top imagen-servicio">
                <div class="card-body">
                    <h4>Administracion de Sistemas Linux</h4>
                </div>
            </div>

            <div class="card shadow zoom">
                <img src="{{ asset('img/administracion-db.jpg') }}" alt="" class="card-img-top imagen-servicio">
                <div class="card-body">
                    <h4>Administracion de Base de Datos</h4>
                </div>
            </div>

        </div>
    </div>

    

    <div class="container-xl my-5">
        <h2 class="text-center fw-bold mb-5">Casos de Exito</h2>
        <section class="contenedor-clientes">

            <div class="card text-start card-comentario shadow testimonial">
                <div class="card-body">
                    <h4 class="card-title card-titulo-comentario mb-3">Inmobiliaria Solomex</h4>
                    <blockquote>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat officia dolor odio hic explicabo iusto facilis assumenda, molestiae corporis nobis ducimus quidem esse, libero, praesentium eius provident nihil ipsum quos?
                    </blockquote>
                    <!-- <p class="card-text card-contenido-comentario"></p> -->
                </div>
            </div>

            <div class="card text-start card-comentario shadow testimonial">
                <div class="card-body">
                    <h4 class="card-title card-titulo-comentario mb-3">Inmobiliaria Solomex</h4>
                    <blockquote>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat officia dolor odio hic explicabo iusto facilis assumenda, molestiae corporis nobis ducimus quidem esse, libero, praesentium eius provident nihil ipsum quos?
                    </blockquote>
                    <!-- <p class="card-text card-contenido-comentario"></p> -->
                </div>
            </div>

            <div class="card text-start card-comentario shadow testimonial">
                <div class="card-body">
                    <h4 class="card-title card-titulo-comentario mb-3">Hotel Villas Fasol</h4>
                    <blockquote>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat officia dolor odio hic explicabo iusto facilis assumenda, molestiae corporis nobis ducimus quidem esse, libero, praesentium eius provident nihil ipsum quos?
                    </blockquote>
                    <!-- <p class="card-text card-contenido-comentario"></p> -->
                </div>
            </div>

            <div class="card text-start card-comentario shadow testimonial">
                <div class="card-body">
                    <h4 class="card-title card-titulo-comentario mb-3">Inmobiliaria Solomex</h4>
                    <blockquote>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat officia dolor odio hic explicabo iusto facilis assumenda, molestiae corporis nobis ducimus quidem esse, libero, praesentium eius provident nihil ipsum quos?
                    </blockquote>
                    <!-- <p class="card-text card-contenido-comentario"></p> -->
                </div>
            </div>

            
           




        </section>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>
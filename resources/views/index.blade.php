<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultoria SystemJG</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>

    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="/">DEV GB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('login.formulario')}}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="contenedor-principal">
        <div class="sombra">
            <div class="contenido-principal">
                <h1 class="logo">Consultoria Dev GB</h1>
                <button class="btn btn-info w-50 mx-auto my-3">Contactar</button>
            </div>

        </div>


    </div>

    <div class="container-xl">
        <section class="contenedor-mvv">
            <div class="mision efecto-rotate">
                <h3>Mision</h3>

                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512.001" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <path d="M256.855 178.625c7.047 0 12.754-5.71 12.754-12.754 0-7.043-5.707-12.754-12.754-12.754-56.347 0-102.027 45.68-102.027 102.031 0 56.348 45.68 102.028 102.027 102.028 56.352 0 102.032-45.68 102.032-102.028 0-7.046-5.711-12.753-12.754-12.753-7.043 0-12.754 5.707-12.754 12.753 0 42.262-34.258 76.524-76.524 76.524-42.261 0-76.523-34.262-76.523-76.524 0-42.265 34.262-76.523 76.523-76.523zm0 0" opacity="1" data-original="#000000" class=""></path>
                        <path d="M500.2 179.395c-2.216-6.692-9.434-10.32-16.13-8.106-6.539 2.164-10.18 9.125-8.23 15.73 38.14 121.458-29.399 250.836-150.856 288.977-121.453 38.14-250.832-29.398-288.972-150.855C-2.133 203.684 65.41 74.305 186.863 36.164a230.521 230.521 0 0 1 138.121 0c6.75 2.035 13.871-1.785 15.907-8.535 2.004-6.649-1.672-13.676-8.278-15.824C197.75-30.508 54.117 44.52 11.805 179.387-30.508 314.25 44.523 457.883 179.387 500.195c134.867 42.313 278.496-32.715 320.808-167.582a255.934 255.934 0 0 0 .004-153.218zm0 0" opacity="1" data-original="#000000" class=""></path>
                        <path d="M281.145 91.117c.066-7.262-5.512-13.332-12.754-13.875-3.809-.324-7.621-.648-11.532-.648-98.613 0-178.554 79.941-178.554 178.554 0 98.61 79.941 178.551 178.554 178.551 98.61 0 178.551-79.941 178.551-178.55 0-4.614-.281-9.223-.847-13.801-1.02-7-7.52-11.848-14.52-10.828-7 1.015-11.848 7.52-10.832 14.52.039.265.086.526.14.792.278 3.09.551 6.152.551 9.309.004 84.527-68.515 153.046-153.039 153.054-84.527.004-153.047-68.52-153.05-153.043-.004-84.523 68.511-153.047 153.039-153.05h.003c3.165 0 6.23.273 9.313.546l2.39.2c6.665.285 12.297-4.887 12.579-11.551.004-.063.004-.121.008-.18zm0 0" opacity="1" data-original="#000000" class=""></path>
                        <path d="M333.379 114.855v45.735l-85.54 85.539c-5.066 4.894-5.206 12.969-.312 18.035 4.895 5.066 12.97 5.207 18.035.313.106-.102.211-.207.313-.313l85.54-85.539h45.733c3.383 0 6.625-1.344 9.02-3.738l76.52-76.524c4.98-4.98 4.98-13.054 0-18.035a12.749 12.749 0 0 0-9.016-3.734H435.41V38.332c0-7.043-5.71-12.754-12.758-12.75a12.747 12.747 0 0 0-9.011 3.734l-76.524 76.524a12.736 12.736 0 0 0-3.738 9.015zm25.508 5.282 51.015-51.016v20.227c0 7.043 5.711 12.754 12.754 12.754h20.227l-51.016 51.015h-32.98zm0 0" opacity="1" data-original="#000000" class=""></path>
                    </g>
                </svg>

                <p>Brindamos soluciones tecnológicas innovadoras y personalizadas, a través del desarrollo de aplicaciones móviles, sitios web, análisis de sistemas, y administración de sistemas y bases de datos, con el fin de optimizar los procesos de nuestros clientes y ayudarles a alcanzar sus objetivos de manera eficiente, segura y escalable.</p>
            </div>
            <div class="vision">
                <h3>Vision</h3>
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 100 100" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <path d="M57.43 28.54V14.18a1.76 1.76 0 0 1 3.51 0v3.4a.89.89 0 0 0 1.17.86l8-3.51a.85.85 0 0 0 0-1.6l-11.58-5c-2.12-.85-.74-4 1.38-3.19l17 7.45a1.72 1.72 0 0 1 0 3.19l-15.51 6.7a.7.7 0 0 0-.42.74v5.64a.77.77 0 0 0 .21.63l10.41 11.6c.11.21.21.31.32.53l23 50.83A1.74 1.74 0 0 1 93.23 95H6.75a1.7 1.7 0 1 1 0-3.4h3.3a1.08 1.08 0 0 0 .63-.22l14.67-13.82a.85.85 0 0 0 .21-.53l3-17.44a1.48 1.48 0 0 1 .53-1.06l9.35-8.19a1.76 1.76 0 0 1 2.77.32L54 73a1.63 1.63 0 0 1-.64 2.34 1.66 1.66 0 0 1-2.33-.64L39.69 55.12a.87.87 0 0 0-1.28-.21L32 60.55a2 2 0 0 0-.32.53l-2.83 17.44a1.65 1.65 0 0 1-.53 1c-3.61 3.62-7.54 7.13-11.26 10.64a.87.87 0 0 0 .64 1.49h40.58a.85.85 0 0 0 .72-1.33l-3.8-8.08a1.76 1.76 0 0 1 .32-2L67.42 68a.69.69 0 0 0 .21-.74L58.71 36.3a.88.88 0 0 0-1.6-.21l-9.45 16.37a1.74 1.74 0 0 1-3-1.8L57.32 29c.11-.1.11-.21.11-.42zM64 91.6h25.2a.94.94 0 0 0 .85-1.28l-21.15-47-.21-.21-3.93-4.47a.89.89 0 0 0-1.49.85l8.08 28.18a1.65 1.65 0 0 1-.43 1.7l-11.68 12a.83.83 0 0 0-.22 1l4.15 8.72a1.1 1.1 0 0 0 .85.53z" opacity="1" data-original="#000000" class=""></path>
                    </g>
                </svg>
                <p>Ser la consultora tecnológica líder en la región, reconocida por nuestra capacidad de adaptarnos a las necesidades cambiantes del mercado, impulsando el éxito de nuestros clientes mediante soluciones tecnológicas de vanguardia y un servicio excepcional.</p>


            </div>
            <div class="valores">
                <h3>Valores</h3>
                <!-- <img src="{{ asset('img/iconos/valores.svg') }}" alt=""> -->
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <path d="m435.1 298.2-2.372 1.28c-9.582-11.628-26.183-16.134-38.831-9.724-.045.022-.09.046-.134.069l-5.6 3.015a42.527 42.527 0 0 0-48.7-4.4l-30.155 16.4h-40.126a57.961 57.961 0 0 1-25.09-5.749l-5.52-2.67a94.693 94.693 0 0 0-98.552 9.625c-.131.1-.259.2-.381.313l-13.327 11.864a46.226 46.226 0 0 1-17.443 9.723L101.3 303.1a6 6 0 0 0-5.739-4.25H31.108a6 6 0 0 0-5.956 6.726l21.484 176.16a6 6 0 0 0 5.956 5.274h96.674a6 6 0 0 0 5.739-7.75l-12.7-41.674 39.554-25a23.8 23.8 0 0 1 17.365-2.247c.124.031.249.059.375.081l80.459 14.816a104.117 104.117 0 0 0 64.337-9.084 5.918 5.918 0 0 0 .734-.43l139.164-95.552a6 6 0 0 0 1.744-8.041A38.2 38.2 0 0 0 435.1 298.2Zm-35.717 2.228c7.315-3.663 16.524-.66 22.406 4.953l-52.772 28.47-3.1 1.633a45.752 45.752 0 0 0-7.228-13.131Zm-54.113-1.485c.047-.027.1-.053.142-.081a30.516 30.516 0 0 1 31.037.292L349.618 313.6a45.592 45.592 0 0 0-17.138-7.713ZM57.9 475.01 37.885 310.85h53.229l50.05 164.16Zm280.784-69.431a92.038 92.038 0 0 1-56.479 7.848l-80.261-14.78a35.777 35.777 0 0 0-26.085 3.535 4.925 4.925 0 0 0-.277.165l-36.915 23.337-26.3-86.251a58.265 58.265 0 0 0 21.917-12.257l13.139-11.7a82.736 82.736 0 0 1 85.918-8.265l5.519 2.67a70.036 70.036 0 0 0 30.315 6.946H322.7a33.851 33.851 0 0 1 33.2 27.49l-38.795-1.755a232.313 232.313 0 0 0-42.22 1.951 6 6 0 0 0 1.646 11.886 219.979 219.979 0 0 1 40.031-1.848l45.656 2.065c.091 0 .182.006.272.006a6 6 0 0 0 6-6c0-.971-.041-1.933-.1-2.89l6.261-3.3 66.149-35.676a26.214 26.214 0 0 1 31.544 5.056Z" opacity="1" data-original="#000000" class=""></path>
                        <path d="M76.974 450.188a18.89 18.89 0 1 0 18.89-18.89 18.911 18.911 0 0 0-18.89 18.89Zm18.89-6.89a6.89 6.89 0 1 1-6.89 6.89 6.9 6.9 0 0 1 6.89-6.888ZM301.622 90.305V70.533a45.544 45.544 0 0 0-91.087 0v19.772a45.544 45.544 0 0 0 91.087 0Zm-79.087 0V70.533a33.544 33.544 0 0 1 67.087 0v19.772a33.544 33.544 0 0 1-67.087 0ZM182.668 259.425H329.49a6 6 0 0 0 6-6v-13.772H436a6 6 0 0 0 6-6v-38.944a44.973 44.973 0 0 0-42.108-44.856c-3.2-.235-4.845 1.791-6.179 3.418a27.535 27.535 0 0 1-43.442-1.061 6 6 0 0 0-4.975-2.433 44.48 44.48 0 0 0-22.071 6.439 50.437 50.437 0 0 0-35.2-17.459c-3.1-.126-4.668 1.756-6.187 3.6a32.308 32.308 0 0 1-50.977-1.245 5.982 5.982 0 0 0-4.975-2.432 50.215 50.215 0 0 0-34.845 15.2 50.536 50.536 0 0 0-2.178 2.393 44.612 44.612 0 0 0-20.457-6.422c-3.189-.235-4.846 1.791-6.179 3.418a27.534 27.534 0 0 1-43.441-1.061 6.015 6.015 0 0 0-4.975-2.433A44.955 44.955 0 0 0 70 194.709v38.944a6 6 0 0 0 6 6h100.668v13.772a6 6 0 0 0 6 6Zm160.066-97.458a39.541 39.541 0 0 0 59.2.155A32.987 32.987 0 0 1 430 194.709v32.944h-94.51v-38.491a50.2 50.2 0 0 0-5.545-22.974 32.433 32.433 0 0 1 12.789-4.221ZM223.3 150.862a44.315 44.315 0 0 0 66.934.159 38.54 38.54 0 0 1 33.26 38.141v58.263H188.668v-58.263a38.763 38.763 0 0 1 34.632-38.3ZM82 227.653v-32.944a33.179 33.179 0 0 1 29.254-32.738 39.538 39.538 0 0 0 59.191.151 32.735 32.735 0 0 1 11.71 4.132 50.271 50.271 0 0 0-5.487 22.908v38.491Z" opacity="1" data-original="#000000" class=""></path>
                        <path d="M412.354 108.179V90.872a40.612 40.612 0 1 0-81.224 0v17.307a40.612 40.612 0 1 0 81.224 0Zm-69.224 0V90.872a28.612 28.612 0 1 1 57.224 0v17.307a28.612 28.612 0 1 1-57.224 0ZM180.87 108.179V90.872a40.612 40.612 0 1 0-81.224 0v17.307a40.612 40.612 0 1 0 81.224 0Zm-69.224 0V90.872a28.612 28.612 0 1 1 57.224 0v17.307a28.612 28.612 0 1 1-57.224 0Z" opacity="1" data-original="#000000" class=""></path>
                    </g>
                </svg>
                <p>Innovación: Buscamos siempre nuevas ideas.</p>
                <p>Compromiso: Nos comprometemos con el éxito de nuestros clientes.</p>
                <p>Calidad: Trabajamos con los más altos estándares de calidad.</p>
                <p>Colaboración: Creemos en el trabajo en equipo y en una comunicación abierta</p>
            </div>
        </section>
    </div>

    <div class="diagonal-box">
        <h2 class="my-4 text-center text-white display-3 fw-bold">Servicios</h2>
        <div class="contenedor-servicios">

            @foreach ($servicios as $servicio)

            <div class="card b-0 shadow zoom">
                <img src="{{ asset($servicio->imagen) }}" alt="" class="card-img-top imagen-servicio">     
            </div>

            @endforeach

        </div>
    </div>

    <div class="container-xl my-5">
        <h2 class="text-center fw-bold mb-5">Clientes que confian en nosotros</h2>
        <section class="imagenes-clientes text-center">
            <a href="https://inmobiliariasolomex.com.mx/">
                <img class="zoom mx-auto" src="{{ asset('img/clientes/Logo-inmobiliaria.png') }}" alt="imagen-cliente">
            </a>
            <img class="zoom mx-auto" src="{{ asset('img/clientes/LogoFasol.jpg') }}" alt="imagen-cliente">
        </section>
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
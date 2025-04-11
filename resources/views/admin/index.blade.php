<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultoria SystemJG</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                        <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item">
                        <a class="nav-link" href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Cerrar sesión
                        </a>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- <h1 class="text-center my-4">Bienvenido a Admin</h1> -->

    <div class="container-xl">

        <div class="menu my-5">
            <a href="{{ route('nuevo.servicio.get') }}" class="btn btn-primary">Nuevo Servicio</a>
            <a href="{{ route('nuevo.cliente.get') }}" class="btn btn-primary">Nuevo Cliente</a>
        </div>

        <div class="my-5">
            <h1 class="my-4 text-secondary text-center">Servicios</h1>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>Nombre</th>
                        <th class="ocultar-movil">Descripcion</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody class="table-light">
                    @foreach ($servicios as $servicio)
                    <tr>
                        <td style="text-align: center; vertical-align: middle;">{{$servicio->nombre}}</td>
                        <td class="ocultar-movil" style="text-align: center; vertical-align: middle;">{{$servicio->descripcion}}</td>
                        <td style="text-align: center; vertical-align: middle;">
                            <img src="{{$servicio->imagen}}" alt="imagen servicio" class="img-fluid imagen-servicio-admin">
                        </td>
                        <td style="text-align: center; vertical-align: middle;">
                            <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST" class="d-inline-block delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>


        <div class="my-5">
            <h1 class="my-4 text-secondary text-center">Clientes</h1>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>Nombre</th>
                        <th class="ocultar-movil" style="width: 400px; max-width: 30%;">Comentario</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody class="table-light">
                    @foreach ($clientes as $cliente)
                    <tr>
                        <td style="text-align: center; vertical-align: middle;">{{$cliente->nombre}}</td>
                        <td class="ocultar-movil" style="text-align: center; vertical-align: middle;">{{$cliente->comentario}}</td>
                        <td style="text-align: center; vertical-align: middle;">
                            <img src="{{$cliente->imagen}}" alt="imagen cliente" class="img-fluid imagen-cliente-admin">
                        </td>
                        <td style="text-align: center; vertical-align: middle;">
                            <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST" class="d-inline-block delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



    <script>
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¡Esta acción no se puede deshacer!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>
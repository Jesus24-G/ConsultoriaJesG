<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultoria SystemJG</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                    <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container-xl">
        <h1 class="text-center my-3">Agrega un nuevo Servicio</h1>

        <form action="{{ route('servicios.store') }}" method="POST" enctype="multipart/form-data" class="formulario shadow rounded border">
            @csrf
            <div class="my-3">
                <label class="form-label">Servicio</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre Servicio">
            </div>
            <div class="my-3">
                <label for="descripcion-servicio" class="form-label">Descripción</label>
                <textarea name="descripcion" id="descripcion-servicio" class="form-control" placeholder="Descripción Servicio"></textarea>
            </div>
            <div class="my-3">
                <label for="imagen-servicio" class="form-label">Imagen Servicio</label>
                <input type="file" name="imagen" class="form-control">
            </div>

            <div class="mt-5 d-flex justify-content-end">
                <input type="submit" class="btn btn-primary" value="Agregar Servicio">
            </div>
        </form>
    </div>


    @if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '¡Éxito!',
            text: "{{ session('success') }}",
            confirmButtonText: 'OK'
        }).then(() => {
            // Redireccionar después de cerrar el SweetAlert
            window.location.href = "{{ route('admin.index') }}"; // o a donde quieras redirigir
        });
    </script>
    @endif


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    
    

</body>

</html>
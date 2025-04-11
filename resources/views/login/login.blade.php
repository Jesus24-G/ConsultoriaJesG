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
                    <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="col-md-5 mx-auto mt-5">
        <form method="POST" action="{{ route('admin.login') }}" class="p-4 border shadow">
        <h4 class="text-center">Login</h4>
            @csrf
            <div class="my-3">
                <label class="form-label">Email:</label>
                <input class="form-control" type="email" name="email" required>
            </div>

            <div class="my-3">
                <label class="form-label">Contraseña:</label>
                <input class="form-control" type="password" name="password" required>
            </div>

            <div class="my-3 d-flex justify-content-end">
                <input type="submit" class="btn btn-dark" value="Inciar Sesion">
            </div>
        </form>

        @if($errors->any())
        <div style="color: red;">
            {{ $errors->first() }}
        </div>
        @endif
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>
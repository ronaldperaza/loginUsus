<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link href="signin.css" rel="stylesheet">
  </head>
    <body class="text-center">
        <main class="form-signin w-100 m-auto">
            <form action="login.php" method="post">
                <h1 class="h3 mb-3 fw-normal">Iniciar Sesión</h1>
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                    <label for="email">Correo Electrónico</label>
                </div>
                <div class="form-floating mt-3">
                    <input type="invite" class="form-control" name="invite" id="invite" placeholder="123456">
                    <label for="invite">Código Acceso</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-5" type="submit">Ingresar</button>
            </form>
        </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
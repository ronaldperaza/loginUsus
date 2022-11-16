<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UC CHRISTUS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
    
    <body>
        <div class="container mt-5">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">UC CHRISTUS</a>
                    <div class="d-flex">
                        <a href="index.php" class="btn btn-outline-success" type="submit">Cerrar</a>
                    </div>
                </div>
            </nav>
        </div>

        <?php 
            $email = $_REQUEST['email'];
            $invite = $_REQUEST['invite'];
        
        ?>
        <?php 
            if ($email == 'admin@gmail.com' && $invite == 'admin') {
                header("location:admin.php");
            } else if ($email == 'cabeza@gmail.com' && $invite == 'cabeza') {
                header("location:cabeza.php");
            } else if ($email == 'colaborador@gmail.com' && $invite == 'colaborador') {
                header("location:colaborador.php");
            } else {
                header("location:error.php");
            }

        ?>
  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
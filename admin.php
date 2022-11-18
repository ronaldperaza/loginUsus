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
                    <a class="navbar-brand" href="#">UC CHRISTUS</a>
                    <div class="d-flex">
                        <a href="index.php" class="btn btn-outline-success" type="submit">Cerrar</a>
                    </div>
                </div>
            </nav>
        </div>

        <?php 
           
            $detalles = 4;
        ?>
       
       
       <div class="container">
            <div id="totalDiv">Monto total Recaudado:
                <p id="total"> </p> 
            </div>
            <?php if (count($detalles) == 0) : ?>
                <br>
                <p>No se encontraron registros.</p>
            <?php else: ?>
                <table class="container table caption-top mt-5 ">
                    
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Cargo</th>
                            <th scope="col">Total</th>
                            <th scope="col">Monto Total</th>
                        </tr>
                    </thead>
                    <tbody>
                   
                        <tr id="demo">
                          
                        </tr>
                      
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
        
           
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
    <script>
        async function peticionGet(){
            const res = await fetch('https://ucchristus.payku.net/uccristus/consulta_ranking.php');
            console.log(res);
            const data = await res.json();
            console.log(data);
            console.log(data.length)
            let text = "";
            let cont = 0;
            for (let i = 0; i < data.length; i++) {
            cont++;
            text += "<tr><th scope='row'>"+ cont + "</th><td>" + data[i]['nombre'] +"</td><td>" + data[i]['email'] +"</td><td>" + data[i]['cargo'] +"</td><td>" + data[i]['total'] +"</td><td>" + data[i]['montototal']+"</td></tr>";
           
            }
            document.querySelector("#demo").innerHTML = text;
        }
        window.onload=peticionGet();
    </script>
    <script>
        async function peticionGetContador(){
            const res = await fetch('https://ucchristus.payku.net/uccristus/callback_contador.php');
            console.log(res);
            const data = await res.json();
            console.log(data);
            console.log(data.length)
            document.querySelector('#total').innerText = data;
        }
        window.onload=peticionGetContador();
    </script>
</html>
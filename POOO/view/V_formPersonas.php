
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <h2 class="my-3">Registrar Personas</h2>
        </div>
        <form action="C_formPersonas.php" method="POST">
            <div class="form-floating mb-3 col-md-8">
                <input type="text" class="form-control" id="documento" placeholder="12345678" name="documento">
                <label for="documento">Documento</label>
            </div>
            <div class="form-floating mb-3 col-md-8">
                <input type="text" class="form-control" id="nombre" placeholder="Escriba su nombre" name="nombre">
                <label for="nombre">Nombre</label>
            </div>
            <div class="form-floating mb-3 col-md-8">
                <input type="text" class="form-control" id="edad" placeholder="Escriba su edad" name="edad">
                <label for="edad">Edad</label>
            </div>
                <div class="mb-3 col-md-8">
                    <select class="form-select" aria-label="Default select example" name="ciudad">
                        
                        <?php 
                            foreach($ciudades as $ciudad){
                                $id = $ciudad['id_ciudad'];
                                echo"<option value='$id'>".$ciudad['nombre_ciudad']."</option>";
                            } 
                        
                        ?>
                    </select>
                </div>
                <input type="submit" class="btn btn-success" name="submit" value="Guardar">
                <a href="../view/index.php" class="btn btn-danger">Cancelar</a>
            </form>
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
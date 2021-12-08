<?php
// Initialize the session
session_start();


$inc = require_once "connectionBD.php";

if ($inc) {
    $sql = "INSERT INTO patient (nombre, apellido, edad, genero, correo, examenes) 
    VALUES ('nombre', 'apellido', 'edad', 'genero', 'correo', 'examenes')";
    $resultado = mysqli_query($link, $sql);
}
mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio </title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
        body {
            font: 14px sans-serif;
            background: url("../img/laboratory.jpg");
        }

        h1 {
            font-size: 20px;
            color: #FFFFFF;
        }

        h3 {
            color: #FFFFFF;
        }
        
        p {
            color: #FFFFFF;
        }
        
        tr {
           
            color:#FFFFFF;
        }

        .bg-primary {
            background-color: #008F39 !important;
           
        }
        .bg-secundary{
            color: #FFFFFF;
        }

        .patient {
            margin-top: 30px;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            border-radius: 20px;
            border: 10px solid #008F39;
            height: 500px;
            margin: 100px;
        }

        .header {
            height: 90px;
            display: flex;
        }

        .header h3 {
            margin-top: 23px;
        }

        .name {
            font-size: 20px;
            font-weight: bold;
            margin-top: 5px;
        }
        .date{
            margin-left: 10px;
        }
        .buttonResult{
            display: flex;
            justify-content: flex-end;
            position: relative;
            bottom: 50px;
            margin-right: 10px;
        }
        .button-primary{
            background-color: #1F3A68;
            color: white;
        }
        .button-primary:hover{
            background-color: #204683;
            color: white;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <h1 class="bg-secundary"><b>Laboratory</b></h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="inicio.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="solicitudes.php">Solicitar examenes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="resultados.php">Enviar resultados</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="patient">
            <div class="header">
                <h3>Solicitud de Examenes de Laboratorio</h3>
            </div>
            <hr>
            <div class="form">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="row g-6" method="post">
            <h1>Ingresar Datos:</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Nombre</td>
                            <td><input type="text" class="form-control" placeholder="" aria-label="First name" name="nombre" value=""></td>
                        </tr>
                        <tr>
                            <td>Apellido</td>
                            <td><input type="text" class="form-control" placeholder="" aria-label="First name" name="apellido" value=""></td>
                        </tr>
                        <tr>
                            <td>Edad</td>
                            <td><input type="text" class="form-control" placeholder="" aria-label="First name" name="edad" value=""></td>
                        </tr>
                        <tr>
                            <td>Genero</td>
                            <td><input type="text" class="form-control" placeholder="" aria-label="First name" name="genero" value=""></td>
                        </tr>
                        <tr>
                            <td>Correo</td>
                            <td><input type="text" class="form-control" placeholder="" aria-label="First name" name="correo" value=""></td>
                        </tr>
                        <tr>
                            <td>Examenes a Realizar</td>
                            <td><input type="text" class="form-control" placeholder="" aria-label="First name" name="examenes" value=""></td>
                        </tr>
                    </tbody>
                </table>
                <div class="col-12 buttonSubmit">
                    <button type="submit" class="btn button-primary" name="submit" value="registrar">Enviar</button>
                </div>
            </form>
        </div>
        </div>
    </div>
    
   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>
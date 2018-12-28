<?php
$conexion = mysqli_connect('localhost','root','','ada3');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabla estudiantes</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="tablaEstudiantes.css">
</head>
<body>

<div class="container">
    <p class="user-logged">Usuario: <?php
        session_start();

        if(isset($_SESSION["usuario"])) {
            echo $_SESSION["usuario"];
        } else {
            echo "Usuario no registrado";
        }
        ?>
    </p>
    <form action="consultaEstudiante.php" method="post">
        <table class="table ">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Matrícula</th>
                <th scope="col">Nombre</th>
            </tr>
            </thead>
            <tbody>
            <?php

            $sql="select * from alumnos";
            $result = mysqli_query($conexion,$sql);
            while($mostrar= mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td scope="row"> <input type="radio" name="id" value="<?php echo $mostrar['id']?>" > <?php echo $mostrar['matricula'] ?></td>
                    <td> <?php echo $mostrar['nombre'] ?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <div class="row">
            <div class="col-sm consultar">
                <input  class="btn btn-secondary btn-lg" type="submit" value="Cosultar">
            </div>
        </div>
    </form>

    <form action="cerrarSesion.php" method="post">
        <div class="row">
            <div class="col-sm cerrar">
                <input class="btn btn-primary "  type="submit" value="Cerrar Sesion">
            </div>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    function logout() {

    }
</script>

</body>
</html>


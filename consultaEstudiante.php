<?php
$conexion = mysqli_connect('localhost','root','','ada3');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tabla estudiantes</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="tablaEstudiantes.css">
</head>
<body>

<div class="container">
    <p class="user-logged">Usuario: <?php
        session_start();
        echo $_SESSION["usuario"]; ?>
    </p>
    <div>
        <p class="text-center">Calificaciones</p>
    </div>
    <?php
    $alumnoSeleccionado = $_POST['id'];
    $sql="select * from alumnos where id='".$alumnoSeleccionado."'";
    $result = mysqli_query($conexion,$sql);
    $mostrar= mysqli_fetch_array($result);

    ?>
    <div>
        <p>Nombre: <?php echo $mostrar['nombre'] ?></p>
        <p>Apellido: <?php echo $mostrar['apellido'] ?></p>
        <p>Asignatura: <?php echo $mostrar['asignatura'] ?></p>
        <p>Calificación: <?php echo $mostrar['calificacion'] ?></p>

    </div>
    <form action="tablaEstudiantes.php" method="post">
        <div class="row">
            <div class="col-sm cerrar">
                <input class="btn btn-primary"  type="submit" value="Regresar">
            </div>
        </div>
    </form>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>


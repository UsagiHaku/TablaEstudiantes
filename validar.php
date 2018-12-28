<?php

$user = $_POST["user"];
$password = $_POST["password"];
$logout = $_POST["logout"];

function login($user, $password){

    $mysqli = new mysqli('localhost','root','','ada3', "33060");

    if ($mysqli->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    else{

        $sql = "select * from usuarios where nombre='".$user."' AND password='".$password."'";
        $resultado = $mysqli->query($sql);

        if($resultado->num_rows > 0){
            session_start();
            $_SESSION["usuario"] = $user;

            redirect("tablaEstudiantes.php");
        }
        else{
            redirect("login.html");
        }
        $resultado->free();
        $mysqli->close();

    }
}


function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);

    exit();
}

login($user,$password);

<?php
/**
 * Created by PhpStorm.
 * User: u.h.
 * Date: 10/30/18
 * Time: 11:00 AM
 */

function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);

    exit();
}

session_start();
unset($_SESSION["usuario"]);
redirect("login.html");

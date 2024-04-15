<?php
if (isset($_POST["btn_login"])){
    $userName = $_POST["u_name"];
    $userPassword = $_POST["u_pass"];
    if ($userName === "eMobilis" && $userPassword === "eMobilis123"){
        echo "Welcome to our system";
    }
}
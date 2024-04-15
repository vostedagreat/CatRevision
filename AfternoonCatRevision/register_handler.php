<?php
if (isset($_POST["btn_register"])){
    $userName = $_POST["u_name"];
    $userPassword = $_POST["u_pass"];
    register($userName,$userPassword);
}


function register($u,$p){
    if ($u === "eMobilis" && $p === "eMobilis123"){
        echo "Welcome to our system";
    }
}
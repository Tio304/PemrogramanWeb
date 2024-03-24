<?php

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $input = $_POST['input'];
    $email = $_POST['email'];

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        echo "Input : ".$input."<br>";
        echo "Email : ".$email;
    }else {
       echo "EMail ndak valid";
    }
}





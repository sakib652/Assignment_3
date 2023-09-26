<?php

function generatePassword($length){

    $character = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_-+={}[]\|:;'<>,.?/";

    $password = "";

    for($i=0; $i<$length; $i++){

        $password .= $character[rand(0, strlen($character)-1)];       

    }

    return $password;
}

echo generatePassword(12);
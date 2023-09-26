<?php

function randomText($text){

    $lowercase = strtolower($text);

    $replace = str_replace("brown","red",$lowercase);

    echo $replace;

}

randomText("The quick brown fox jumps over the lazy dog.");
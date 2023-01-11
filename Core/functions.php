<?php

// handy dandy function for inspecting

function dd($value){
    
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    
    die();

}

// Url checking 

function isUrl($value){

    return $_SERVER['REQUEST_URI'] === $value;

}
<?php

// handy dandy function for inspecting

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    
    die();
}

// For Including Files

function base_path($path)
{
    return BASE_PATH . $path;
}

// Url checking 

function isUrl($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

/**
 * Function that accepts parameters depends on arguments.
 * Checks the arguments if all the arguments(array) are empty 
 * return true.
 */

function checkConditions(...$conditions) 
{

    foreach ($conditions as $condition) {
        if (!empty($condition)) {
        return false;
        }
    }
    
    return true;
}
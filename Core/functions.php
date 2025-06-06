<?php 


function dd($value){
    echo"<pre>";
        var_dump($value);
    echo "</pre>";
}

function activeClass($path){
    return  $_SERVER['REQUEST_URI'] === $path;
}

<?php

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    // The request is using the POST method
    header("HTTP/1.1 200 OK");
    return;
}


require 'kirby/bootstrap.php';

echo (new Kirby)->render();

<?php

    // Kevin Locke
    // IT328
    // Carz Website - Final Project

    //Require the autoload file
    require_once('vendor/autoload.php');

    session_start();

    //Create an instance of the Base class
    $f3 = Base::instance();
    
    $f3->set('DEBUG', 3);
    
   //Define a default route
   $f3->route('GET /', function()
    {
        $view = new View;
        echo $view->render
        ('pages/home.html');
    });
   
    //Run fat free MVC Framework
    $f3->run();
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
   $f3->route('GET /', function($f3)
    {
        $view = new View;
        $f3->set('navbar','pages/navbar.html'); // provide nav bar
        
        // give the content to template
        $f3->set('carousel', 'pages/carousel.html'); // give homepage the navbar html
        $f3->set('pageData', 'pages/home.html'); // put home in the template
        
        echo Template::instance()->render('pages/template.html');
    });
   
    //Run fat free MVC Framework
    $f3->run();
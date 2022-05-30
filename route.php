<?php 
require 'vendor/autoload.php';

require_once 'Controller/VentaDiariaController.php';



Flight::route('/mango', function(){
    echo "hello, este servidor esta funcional!";
});

Flight::route('/', array('VentaDiariaController','index'));



Flight::start();




?>
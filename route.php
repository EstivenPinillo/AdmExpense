<?php 
require 'vendor/autoload.php';

require_once 'Controller/VentaDiaController.php';
require_once 'Controller/GastoDiaController.php';
require_once 'Controller/InsumoController.php';
require_once 'Controller/AhorroController.php';
require_once 'Controller/HomeController.php';
require_once 'Controller/AnalisisAmdController.php';


Flight::route('/analisisamd', array('AnalisisAmdController','index'));

Flight::route('/home', array('HomeController','index'));

Flight::route('/ahorro', array('AhorroController','index'));

Flight::route('/insumos', array('InsumoController','index'));

Flight::route('/gastodia', array('GastoDiaController','index'));

Flight::route('/ventadia', array('VentaDiaController','index'));

Flight::route('/ventadia/save', array('VentaDiaController','save'));

Flight::route('/', array('HomeController','index'));



Flight::start();




?>
<?php 
require_once 'HelperRenderView.php';
require_once 'Model/VentaDia.php';


class VentaDiaController {

    public static function index(){
                
        echo HelperRenderView::RenderViews()->render('VentaDia::VentaDia');

    }

    public static function save(){

        $valorIngreso = $_REQUEST['ValorIngreso'];
        $fechaIngreso = $_REQUEST['FechaIngreso'];

        try {

            VentaDia::create(
                array(
                        'fecha_ingreso' =>  $fechaIngreso,
                        'valor_ingreso' => $valorIngreso
                    )
            );

        } catch(Exception $e) {

            echo HelperRenderView::RenderViews()->render('VentaDia::VentaDia', ['alert' => 'alertNegavit']);
            die();

        }
        
        echo HelperRenderView::RenderViews()->render('VentaDia::VentaDia', ['alert' => 'alertExit']);

    }


}


?>
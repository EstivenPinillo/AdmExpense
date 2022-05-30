<?php 
require_once 'HelperRenderView.php';

class VentaDiariaController{

    public static function index(){
                
        $templates = HelperRenderView::RenderViews();
        echo $templates->render('VentaDiaria::VentaDiaria');

    }


}


?>
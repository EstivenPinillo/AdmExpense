<?php 

require_once 'HelperRenderView.php';

class InsumoController {

    public static function index(){

        echo HelperRenderView::RenderViews()->render('Insumo::Insumo');
        
    }

}


?>
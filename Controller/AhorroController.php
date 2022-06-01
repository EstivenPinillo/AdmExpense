<?php 

require_once 'HelperRenderView.php';

class AhorroController {

    public static function index(){

        echo HelperRenderView::RenderViews()->render('Ahorro::Ahorro');
        
    }

}



?>
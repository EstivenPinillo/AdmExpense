<?php 

require_once 'HelperRenderView.php';

class AnalisisAmdController {

    public static function index(){

        echo HelperRenderView::RenderViews()->render('AnalisisAmd::AnalisisAmd');
        
    }

}

?>
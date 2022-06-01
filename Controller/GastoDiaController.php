<?php

require_once 'HelperRenderView.php';

class GastoDiaController{

    public static function index(){

        echo HelperRenderView::RenderViews()->render('GastoDia::GastoDia');

    }

}

?>
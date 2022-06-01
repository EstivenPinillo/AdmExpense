<?php
require_once 'HelperRenderView.php';

class HomeController{

    public static function index(){

        echo HelperRenderView::RenderViews()->render('Home::Home');

    }


}


?>
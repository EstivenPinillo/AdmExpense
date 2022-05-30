<?php 

class HelperRenderView{

    public static function RenderViews(){
        $templates = new League\Plates\Engine();
        $templates->addFolder('Components', 'View/Components');
        $templates->addFolder('VentaDiaria', 'View/VentaDiaria');
        
        return $templates;
    }

}




?>
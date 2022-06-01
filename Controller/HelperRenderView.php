<?php 

class HelperRenderView{

    public static function RenderViews(){
        
        $templates = new League\Plates\Engine();
        $templates->addFolder('Components', 'View/Components');
        $templates->addFolder('VentaDia', 'View/VentaDia');
        $templates->addFolder('GastoDia', 'View/GastoDia');
        $templates->addFolder('Insumo', 'View/Insumo');
        $templates->addFolder('Ahorro', 'View/Ahorro');
        $templates->addFolder('AnalisisAmd', 'View/AnalisisAmd');
        $templates->addFolder('Home', 'View/Home');
        
        return $templates;
    }

}




?>
<?php 
require_once 'Model.php';

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model as Models;

class VentaDia extends Models {

    use SoftDeletes;
    
    public $timestamps = true;
    
    protected $table = 'tbl_venta_dia';
    
    protected $fillable = array(
        'id',
        'fecha_ingreso',
        'valor_ingreso',
    );
    

}



?>
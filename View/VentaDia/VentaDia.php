<?php $this->insert('Components::Head',["title" => "Venta Dia"]) ?>


<div class="contenedor-form">

    <?php 
        if(!isset($alert)):
            $alert = null;
        endif
    ?>

    <?php $this->insert('Components::Alert', ["$alert" => "alert"]) ?>

    <form action="/ventadia/save" method="POST" class="form">
        <h2 class="title-form" id="VentaD">Venta D.</h2>
        <div class="group-input">
            <label for="FechaIngreso" class="label">Fecha ingreso</label>
            <input type="date" name="FechaIngreso" id="FechaIngreso" class="input"/>
        </div>
        <div class="group-input">
            <label for="ValorIngreso" class="label">Valor ingreso</label>
            <input type="text" name="ValorIngreso" id="ValorIngreso" class="input" placeholder="Ej: 90.000"  autocomplete="off"/>
        </div>
        <div class="group-btn">
            <button type="submit" class="btn">Agregar</button>
        </div>
    </form>
    
    <div class="content-list">
        <div class="subcontent-list">
            <div class="element-list">
                <div class="">
                    <labe class="label">Fecha ingreso</labe>
                </div>
                <div class="">
                    <?php echo date("Y-m-d H:i:s"); ?>
                </div>
            </div>
            <div class="element-list">
                <div class="">
                    <label class="label">Varlor ingreso</label>
                </div>
                <div class="">
                    9.000
                    <span>$</span>
                </div>
            </div>
        </div>
        <div class="subcontent-list">
            <div class="element-list-button">
                <div class="">
                    <button type="submit" class="button-edit" >Editar</button>
                </div>
            </div>
            <div class="element-list-button">
                <div class="">
                    <button type="submit" class="button-delete" >Eliminar</button>
                </div>
            </div>
        </div>
    </div>

</div>

<?php $this->insert('Components::Footer') ?>
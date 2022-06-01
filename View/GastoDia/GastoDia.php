<?php $this->insert('Components::Head',["title"=>"Gasto Dia"]) ?>


<div class="contenedor-form">
    <form action="" class="form">
        <h2 class="title-form" id="GastoD">Gasto D.</h2>
        <div class="group-input">
            <label for="FechaIngreso" class="label">Fecha ingreso</label>
            <input type="date" name="FechaIngreso" id="FechaIngreso" class="input"/>
        </div>
        <div class="group-input">
            <label for="Insumo" class="label">Insumo</label>
            <input type="text" name="Insumo" id="Insumo" class="input" placeholder="Ej: Borojo"/>
        </div>
        <div class="group-input">
            <label for="Valor" class="label">Valor</label>
            <input type="text" name="Valor" id="Valor" class="input" placeholder="Ej: 9.000"/>
        </div>
        <div class="group-input">
            <label for="Cantidad" class="label">Cantidad</label>
            <input type="text" name="Cantidad" id="Cantidad" class="input" placeholder="Ej: 5"/>
        </div>
        <div class="group-input total">
            <label class="label block">Total</label>
            <span id="Total" >0</span>
            <span class="pesos">$</span>
        </div>
        <div class="group-btn">
            <button type="submit" class="btn">Agregar</button>
        </div>
    </form>
</div>

<?php $this->insert('Components::Footer') ?>
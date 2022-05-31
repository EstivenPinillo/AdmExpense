<?php $this->insert('Components::Head',["title"=>"Venta Diaria"]) ?>


<div class="contenedor-form">
    <form action="" class="form">
        <h2 class="title-form">Venta D.</h2>
        <div class="group-input">
            <label for="FechaIngreso" class="label">Fecha ingreso</label>
            <input type="date" name="FechaIngreso" id="FechaIngreso" class="input"/>
        </div>
        <div class="group-input">
            <label for="CantidadIngreso" class="label">Cantidad ingreso</label>
            <input type="text" name="CantidadIngreso" id="CantidadIngreso" class="input" placeholder="Ej: 90.000"/>
        </div>
        <div class="group-btn">
            <button type="submit" class="btn">Agregar</button>
        </div>
    </form>
</div>

<?php $this->insert('Components::Footer') ?>
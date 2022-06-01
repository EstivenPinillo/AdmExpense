<?php $this->insert('Components::Head',["title"=>"Ahorro"]) ?>

<div class="contenedor-form">
    <form action="" class="form">
        <h2 class="title-form" id="Ahorro">Ahorro</h2>
        <div class="group-input">
            <label for="FechaAhorro" class="label">Fecha Ahorro</label>
            <input type="date" name="FechaIngreso" id="FechaAhorro" class="input"/>
        </div>
        <div class="group-input">
            <label for="Cantidad" class="label">Cantidad</label>
            <input type="text" name="Cantidad" id="Cantidad" class="input" placeholder="Ej: 70.000"/>
        </div>
        <div class="group-input total">
            <label class="label block">Total disponible</label>
            <span id="Total" >0</span>
            <span class="pesos">$</span>
        </div>
        <div class="group-btn">
            <button type="submit" class="btn">Agregar</button>
        </div>
    </form>
</div>

<?php $this->insert('Components::Footer') ?>
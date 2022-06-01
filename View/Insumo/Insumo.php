<?php $this->insert('Components::Head',["title"=>"Insumo"]) ?>

<div class="contenedor-form">
    <form action="" class="form">
        <h2 class="title-form" id="Insumo">Insumo</h2>
        <div class="group-input">
            <label for="Insumo" class="label">Insumo</label>
            <input type="text" name="Insumo" id="Insumo" class="input"/>
        </div>
        <div class="group-btn">
            <button type="submit" class="btn">Agregar</button>
        </div>
    </form>
</div>

<?php $this->insert('Components::Footer') ?>
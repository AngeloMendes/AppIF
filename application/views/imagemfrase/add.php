<?php echo form_open('imagemfrase/add', array("class" => "form-horizontal")); ?>

<div class="form-group">
    <label for="titulo" class="col-md-4 control-label">Título</label>
    <div class="col-md-8">
        <input type="text" name="titulo" value="<?php echo $this->input->post('titulo'); ?>" class="form-control"
               id="titulo"/>
    </div>
</div>
<div class="form-group">
    <div class="col-md-12">
        <div class="form-group files">
            <label for="imagem">Adicione uma imagem </label>
            <input type="file" name="imagem" value="<?php echo $this->input->post('imagem'); ?>"
                   class="form-control"
                   id="imagem" multiple="">
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-12">
        <div class="form-group files">
            <label for="video">Adicione um video </label>
            <input type="file" name="video" value="<?php echo $this->input->post('video'); ?>"
                   class="form-control"
                   id="video" multiple="">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-8 form-inputs">
        <label for="descricao">Descrição</label>
        <textarea class="form-control" rows="9" id="descricao" name="descricao"
                  value="<?php echo $this->input->post('descricao'); ?>"></textarea>
    </div>
</div>
<div class="form-group">
    <label for="frase1" class="col-md-4 control-label">Frase1</label>
    <div class="col-md-8">
        <input type="text" name="frase1" value="<?php echo $this->input->post('frase1'); ?>" class="form-control"
               id="frase1"/>
    </div>
</div>
<div class="form-group">
    <label for="frase2" class="col-md-4 control-label">Frase2</label>
    <div class="col-md-8">
        <input type="text" name="frase2" value="<?php echo $this->input->post('frase2'); ?>" class="form-control"
               id="frase2"/>
    </div>
</div>
<div class="form-group">
    <label for="frase3" class="col-md-4 control-label">Frase3</label>
    <div class="col-md-8">
        <input type="text" name="frase3" value="<?php echo $this->input->post('frase3'); ?>" class="form-control"
               id="frase3"/>
    </div>
</div>
<div class="form-group">
    <label for="frase4" class="col-md-4 control-label">Frase4</label>
    <div class="col-md-8">
        <input type="text" name="frase4" value="<?php echo $this->input->post('frase4'); ?>" class="form-control"
               id="frase4"/>
    </div>
</div>
<div class="form-group">
    <label for="frase5" class="col-md-4 control-label">Frase5</label>
    <div class="col-md-8">
        <input type="text" name="frase5" value="<?php echo $this->input->post('frase5'); ?>" class="form-control"
               id="frase5"/>
    </div>
</div>
<div class="form-group">
    <label for="frase6" class="col-md-4 control-label">Frase6</label>
    <div class="col-md-8">
        <input type="text" name="frase6" value="<?php echo $this->input->post('frase6'); ?>" class="form-control"
               id="frase6"/>
    </div>
</div>
<div class="form-group">
    <label for="frase7" class="col-md-4 control-label">Frase7</label>
    <div class="col-md-8">
        <input type="text" name="frase7" value="<?php echo $this->input->post('frase7'); ?>" class="form-control"
               id="frase7"/>
    </div>
</div>
<div class="form-group">
    <label for="frase8" class="col-md-4 control-label">Frase8</label>
    <div class="col-md-8">
        <input type="text" name="frase8" value="<?php echo $this->input->post('frase8'); ?>" class="form-control"
               id="frase8"/>
    </div>
</div>
<div class="form-group">
    <label for="fraseCorreta" class="col-md-4 control-label">FraseCorreta</label>
    <div class="col-md-8">
        <input type="text" name="fraseCorreta" value="<?php echo $this->input->post('fraseCorreta'); ?>"
               class="form-control" id="fraseCorreta"/>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-success">Save</button>
    </div>
</div>

<?php echo form_close(); ?>
<style>

    label {
        overflow: auto;
        left: 0%;
        margin: auto;
        width: 30%;
        padding: 0px 0;
    }

    .form-add {
        position: absolute;
    !important;
        top: 60px;
        left: 15%;
        width: 70%;
        right: 15%;
        height: 56px;
    }

    .form-inputs {
        width: 100%;
    !important;
    }

    .files input {
        outline: 2px dashed #92b0b3;
        outline-offset: -10px;
        -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
        transition: outline-offset .15s ease-in-out, background-color .15s linear;
        padding: 100px 0px 55px 35%;
        text-align: center !important;
        margin: 0;
        width: 98% !important;
    }

    .files input:focus {
        outline: 2px dashed #92b0b3;
        outline-offset: -10px;
        -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
        transition: outline-offset .15s ease-in-out, background-color .15s linear;
        border: 1px solid #92b0b3;
    }

    .files {
        position: relative;
    }

    .files:after {
        pointer-events: none;
        position: absolute;
        top: 60px;
        left: 0;
        width: 50px;
        right: 0;
        height: 56px;
        content: "";
        background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
        display: block;
        margin: 0 auto;
        background-size: 100%;
        background-repeat: no-repeat;
    }

    .color input {
        background-color: #f1f1f1;
    }

    /*.files:before {
        position: absolute;
        bottom: 10px;
        left: 0;
        pointer-events: none;
        width: 100%;
        right: 0;
        height: 57px;
        content: " or drag it here. ";
        display: block;
        margin: 0 auto;
        color: #2ea591;
        font-weight: 600;
        text-transform: capitalize;
        text-align: center;
        }*/

</style>

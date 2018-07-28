<?php echo form_open('licao/add', array("class" => "form-horizontal")); ?>
<div class="form-add">
    <div class="form-group">
        <div class="col-md-8  form-inputs" >
            <label for="titulo">Título</label>
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
            <label for="descricao" >Descricao</label>
            <textarea class="form-control" rows="9" id="descricao"name="descricao" value="<?php echo $this->input->post('descricao'); ?>"></textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8 ">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
        </div>
    </div>
</div>
<?php echo form_close(); ?>

<style>

    label{
        overflow: auto;
        left: 0%;
        margin: auto;
        width: 30%;
        padding: 0px 0;
    }

    .form-add {
        position: absolute;!important;
        top: 60px;
        left: 15%;
        width: 70%;
        right: 15%;
        height: 56px;
    }
    .form-inputs{
        width: 100%; !important;
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
        text-align: center;*/
    }
</style>
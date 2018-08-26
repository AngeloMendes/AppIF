<?php echo form_open_multipart('pergunta/add', array("class" => "form-horizontal")); ?>
<div class="form-add">
    <div class="form-group">
        <div class="col-md-8  form-inputs">
            <!--<label for="idLicao">Lição</label>-->
            <input type="hidden" name="idLicao" value="<?php echo $idLicao; ?>" id="idLicao"/>

            <!--<select name='idLicao' id='idLicao'>
                <option value=''> Selecione uma lição</option>
                <?php
                foreach ($licoes as $key => $list) {
                    echo "<option value='" . $this->input->post('idLicao') . "'>" . $list['titulo'] . '</option>';
                }
                echo '</optgroup>';

                ?>
            </select>-->

        </div>
    </div>
    <div class="form-group">
        <div class="col-md-8  form-inputs">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" value="<?php echo $this->input->post('titulo'); ?>" class="form-control"
                   id="titulo"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-8 form-inputs">
            <label for="descricao">Descricao</label>
            <textarea class="form-control" rows="9" id="descricao" name="descricao"
                      value="<?php echo $this->input->post('descricao'); ?>"></textarea>
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
        <div class="col-md-8  form-inputs">
            <label for="opcao1">Opção 1</label>
            <input type="text" name="opcao1" value="<?php echo $this->input->post('opcao1'); ?>" class="form-control"
                   id="opcao1"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-8  form-inputs">
            <label for="opcao2">Opção 2</label>
            <input type="text" name="opcao2" value="<?php echo $this->input->post('opcao2'); ?>" class="form-control"
                   id="opcao2"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-8  form-inputs">
            <label for="opcao3">Opção 3</label>
            <input type="text" name="opcao3" value="<?php echo $this->input->post('opcao3'); ?>" class="form-control"
                   id="opcao3"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-8  form-inputs">
            <label for="opcao4">Opção 4</label>
            <input type="text" name="opcao4" value="<?php echo $this->input->post('opcao4'); ?>" class="form-control"
                   id="opcao4"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-8  form-inputs">
            <label for="opcao5">Opção 5</label>
            <input type="text" name="opcao5" value="<?php echo $this->input->post('opcao5'); ?>" class="form-control"
                   id="opcao5"/>
        </div>
    </div>


    <div class="form-group">
        <div class="col-md-8  form-inputs">
            <label for="opcaoCorreta">Opção correta</label>
            <input type="text" name="opcaoCorreta" value="<?php echo $this->input->post('opcaoCorreta'); ?>"
                   class="form-control"
                   id="opcaoCorreta"/>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8 form-inputs">
            <label for="caixaTexto">Observações</label>
            <textarea class="form-control" rows="9" id="caixaTexto" name="caixaTexto"
                      value="<?php echo $this->input->post('caixaTexto'); ?>"></textarea>
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
        text-align: center;*/
    }
</style>

<link rel="stylesheet" type="text/css" href="   ../application/views/css/style.css">
<?php echo form_open('conjuntodialogo/add/'.$idLicao, array("class" => "form-horizontal")); ?>
    <div>
        <div class="form-group">
            <div class="col-md-8  form-inputs">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" value="<?php echo $this->input->post('titulo'); ?>"
                       class="form-control" id="titulo"/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12 form-inputs">
                <div class="form-group files">
                    <label for="imagem">Adicione uma imagem </label>
                    <input type="file" name="imagem" value="<?php echo $this->input->post('imagem'); ?>"
                           class="form-control"
                           id="imagem" multiple="">
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

        <?php $this->load->view('dialogofrase/add'); ?>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </div>

<?php echo form_close(); ?>


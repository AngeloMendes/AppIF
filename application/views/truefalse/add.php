<?php echo form_open('conjuntotruefalse/add/' . $idLicao, array("class" => "form-horizontal")); ?>
<link rel="stylesheet" type="text/css" href="   ../application/views/css/style.css">

<div class="form-add">
    <div class="form-group">
        <div class="col-md-8  form-inputs">
            <label for="titulo" class="col-md-4 control-label">Titulo</label>
            <input type="text" name="titulo" value="<?php echo $this->input->post('titulo'); ?>"
                   class="form-control" id="titulo"/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <label for="video">Adicione uma imagem </label>
            <div class="form-group files">

                <input type="file" name="imagem" value="<?php echo $this->input->post('imagem'); ?>"
                       class="form-control"
                       id="imagem" multiple=""></div>
        </div>
        <div class="col-md-4 col-md-offset-2">
            <label for="video">Adicione um video </label>
            <div class="form-group files">
                <input type="file" name="video" value="<?php echo $this->input->post('video'); ?>"
                       class="form-control"
                       id="video" multiple=""></div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8 form-inputs">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" rows="9" id="descricao" name="descricao"
                      value="<?php echo $this->input->post('descricao'); ?>"></textarea>
        </div>
    </div>


    <?php $this->load->view('truefalsefrase/add'); ?>

</div>
<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-success">Save</button>
    </div>
</div>

<?php echo form_close(); ?>


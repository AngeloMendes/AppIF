<link rel="stylesheet" href="<?php echo base_url();?>application/views/css/style.css" type="text/css" />
<?php echo form_open('conjuntodialogo/add/'.$idLicao, array("class" => "form-horizontal")); ?>
<div class="form-add">
    <div>
        <div class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
            <h1 align="center" for="titulo">Dialogo</h1>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6  form-inputs">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" value="<?php echo $this->input->post('titulo'); ?>"
                   class="form-control" id="titulo"/>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label for="video">Adicione uma imagem </label>
            </div>
            <div class="col-md-12 ">
                <div class="form-group files">

                    <input type="file" name="imagem" value="<?php echo $this->input->post('imagem'); ?>"
                           class="form-control"
                           id="imagem" multiple=""></div>
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
        <div class="col-sm-offset-4 col-sm-4">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Adicionar</button>
        </div>
    </div>

    <?php echo form_close(); ?>


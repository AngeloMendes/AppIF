<?php echo form_open_multipart('licao/add', array("class" => "form-horizontal")); ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>application/views/css/style.css" type="text/css"/>
<h1 align="center">Adicionar Lição </h1>
<div class="form-add">
    <div class="form-group">
        <div class="col-md-8  form-inputs">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" value="<?php echo $this->input->post('titulo'); ?>" class="form-control"
                   id="titulo"/>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-1">


        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <div class="form-group files">
                    <label for="imagem">Adicione uma imagem </label>

                    <input type="file" name="imagem" value="<?php echo $this->input->post('imagem'); ?>"
                           class="form-control"
                           id="imagem" multiple="">
                </div>
            </div>

            <div class="col-md-4 col-md-offset-2">
                <div class="form-group files">
                    <label for="video">Adicione um video </label>

                    <input type="file" name="video" value="<?php echo $this->input->post('video'); ?>"
                           class="form-control"
                           id="video" multiple="">
                </div>
            </div>
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
        <div class="col-sm-offset-2 col-sm-8 ">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
        </div>
    </div>
</div>
<?php echo form_close(); ?>

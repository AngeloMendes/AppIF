<?php echo form_open('progresso/add',array("class"=>"form-horizontal")); ?>
<link rel="stylesheet" type="text/css" href="   ../application/views/css/style.css">

<div class="form-add">


    <div class="form-group">

        <div class="col-md-8 form-inputs">
            <label for="idUsuario" >IdUsuario</label>
            <input type="text" name="idUsuario" value="<?php echo $this->input->post('idUsuario'); ?>" class="form-control" id="idUsuario" />
        </div>
    </div>
    <div class="form-group">

        <div class="col-md-8 form-inputs">
            <label for="idLicao" >IdLicao</label>
            <input type="text" name="idLicao" value="<?php echo $this->input->post('idLicao'); ?>" class="form-control" id="idLicao" />
        </div>
    </div>
    <div class="form-group">

        <div class="col-md-8 form-inputs">
            <label for="idPergunta">IdPergunta</label>
            <input type="text" name="idPergunta" value="<?php echo $this->input->post('idPergunta'); ?>" class="form-control" id="idPergunta" />
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-8 ">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
        </div>
    </div>
</div>
<?php echo form_close(); ?>

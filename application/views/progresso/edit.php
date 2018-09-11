<link rel="stylesheet" type="text/css" href="   ../application/views/css/style.css">

<?php echo form_open('progresso/edit/'.$progresso['idProgresso'],array("class"=>"form-horizontal")); ?>


	<div class="form-group">
        <div class="col-md-8 form-inputs">
            <label for="idUsuario">IdUsuario</label>
            <input type="text" name="idUsuario" value="<?php echo ($this->input->post('idUsuario') ? $this->input->post('idUsuario') : $progresso['idUsuario']); ?>" class="form-control" id="idUsuario" />
		</div>
	</div>
	<div class="form-group">
        <div class="col-md-8 form-inputs">
            <label for="idLicao" >IdLicao</label>
			<input type="text" name="idLicao" value="<?php echo ($this->input->post('idLicao') ? $this->input->post('idLicao') : $progresso['idLicao']); ?>" class="form-control" id="idLicao" />
		</div>
	</div>
	<div class="form-group">
        <div class="col-md-8 form-inputs">
            <label for="idPergunta" >IdPergunta</label>
			<input type="text" name="idPergunta" value="<?php echo ($this->input->post('idPergunta') ? $this->input->post('idPergunta') : $progresso['idPergunta']); ?>" class="form-control" id="idPergunta" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
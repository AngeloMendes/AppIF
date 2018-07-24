<?php echo form_open('usuario/edit/'.$usuario['idUsuario'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nome" class="col-md-4 control-label">Nome</label>
		<div class="col-md-8">
			<input type="text" name="nome" value="<?php echo ($this->input->post('nome') ? $this->input->post('nome') : $usuario['nome']); ?>" class="form-control" id="nome" />
		</div>
	</div>
	<div class="form-group">
		<label for="pontos" class="col-md-4 control-label">Pontos</label>
		<div class="col-md-8">
			<input type="text" name="pontos" value="<?php echo ($this->input->post('pontos') ? $this->input->post('pontos') : $usuario['pontos']); ?>" class="form-control" id="pontos" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
<?php echo form_open('dialogofrase/edit/'.$dialogofrase['idDialogoFrases'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="descricao" class="col-md-4 control-label">Descricao</label>
		<div class="col-md-8">
			<input type="text" name="descricao" value="<?php echo ($this->input->post('descricao') ? $this->input->post('descricao') : $dialogofrase['descricao']); ?>" class="form-control" id="descricao" />
		</div>
	</div>
	<div class="form-group">
		<label for="frase" class="col-md-4 control-label">Frase</label>
		<div class="col-md-8">
			<input type="text" name="frase" value="<?php echo ($this->input->post('frase') ? $this->input->post('frase') : $dialogofrase['frase']); ?>" class="form-control" id="frase" />
		</div>
	</div>
	<div class="form-group">
		<label for="opcao1" class="col-md-4 control-label">Opcao1</label>
		<div class="col-md-8">
			<input type="text" name="opcao1" value="<?php echo ($this->input->post('opcao1') ? $this->input->post('opcao1') : $dialogofrase['opcao1']); ?>" class="form-control" id="opcao1" />
		</div>
	</div>
	<div class="form-group">
		<label for="opcao2" class="col-md-4 control-label">Opcao2</label>
		<div class="col-md-8">
			<input type="text" name="opcao2" value="<?php echo ($this->input->post('opcao2') ? $this->input->post('opcao2') : $dialogofrase['opcao2']); ?>" class="form-control" id="opcao2" />
		</div>
	</div>
	<div class="form-group">
		<label for="opcao3" class="col-md-4 control-label">Opcao3</label>
		<div class="col-md-8">
			<input type="text" name="opcao3" value="<?php echo ($this->input->post('opcao3') ? $this->input->post('opcao3') : $dialogofrase['opcao3']); ?>" class="form-control" id="opcao3" />
		</div>
	</div>
	<div class="form-group">
		<label for="opcaoCorreta" class="col-md-4 control-label">OpcaoCorreta</label>
		<div class="col-md-8">
			<input type="text" name="opcaoCorreta" value="<?php echo ($this->input->post('opcaoCorreta') ? $this->input->post('opcaoCorreta') : $dialogofrase['opcaoCorreta']); ?>" class="form-control" id="opcaoCorreta" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
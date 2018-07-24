<?php echo form_open('pergunta/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="titulo" class="col-md-4 control-label">Titulo</label>
		<div class="col-md-8">
			<input type="text" name="titulo" value="<?php echo $this->input->post('titulo'); ?>" class="form-control" id="titulo" />
		</div>
	</div>
	<div class="form-group">
		<label for="descricao" class="col-md-4 control-label">Descricao</label>
		<div class="col-md-8">
			<input type="text" name="descricao" value="<?php echo $this->input->post('descricao'); ?>" class="form-control" id="descricao" />
		</div>
	</div>
	<div class="form-group">
		<label for="video" class="col-md-4 control-label">Video</label>
		<div class="col-md-8">
			<input type="text" name="video" value="<?php echo $this->input->post('video'); ?>" class="form-control" id="video" />
		</div>
	</div>
	<div class="form-group">
		<label for="imagem" class="col-md-4 control-label">Imagem</label>
		<div class="col-md-8">
			<input type="text" name="imagem" value="<?php echo $this->input->post('imagem'); ?>" class="form-control" id="imagem" />
		</div>
	</div>
	<div class="form-group">
		<label for="opcao1" class="col-md-4 control-label">Opcao1</label>
		<div class="col-md-8">
			<input type="text" name="opcao1" value="<?php echo $this->input->post('opcao1'); ?>" class="form-control" id="opcao1" />
		</div>
	</div>
	<div class="form-group">
		<label for="opcao2" class="col-md-4 control-label">Opcao2</label>
		<div class="col-md-8">
			<input type="text" name="opcao2" value="<?php echo $this->input->post('opcao2'); ?>" class="form-control" id="opcao2" />
		</div>
	</div>
	<div class="form-group">
		<label for="opcao3" class="col-md-4 control-label">Opcao3</label>
		<div class="col-md-8">
			<input type="text" name="opcao3" value="<?php echo $this->input->post('opcao3'); ?>" class="form-control" id="opcao3" />
		</div>
	</div>
	<div class="form-group">
		<label for="opcao4" class="col-md-4 control-label">Opcao4</label>
		<div class="col-md-8">
			<input type="text" name="opcao4" value="<?php echo $this->input->post('opcao4'); ?>" class="form-control" id="opcao4" />
		</div>
	</div>
	<div class="form-group">
		<label for="idLicao" class="col-md-4 control-label">IdLicao</label>
		<div class="col-md-8">
			<input type="text" name="idLicao" value="<?php echo $this->input->post('idLicao'); ?>" class="form-control" id="idLicao" />
		</div>
	</div>
	<div class="form-group">
		<label for="opcaoCorreta" class="col-md-4 control-label">OpcaoCorreta</label>
		<div class="col-md-8">
			<textarea name="opcaoCorreta" class="form-control" id="opcaoCorreta"><?php echo $this->input->post('opcaoCorreta'); ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="caixaTexto" class="col-md-4 control-label">CaixaTexto</label>
		<div class="col-md-8">
			<textarea name="caixaTexto" class="form-control" id="caixaTexto"><?php echo $this->input->post('caixaTexto'); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
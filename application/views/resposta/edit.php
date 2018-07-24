<?php echo form_open('resposta/edit/'.$resposta['idResposta'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="idUsuario" class="col-md-4 control-label">IdUsuario</label>
		<div class="col-md-8">
			<input type="text" name="idUsuario" value="<?php echo ($this->input->post('idUsuario') ? $this->input->post('idUsuario') : $resposta['idUsuario']); ?>" class="form-control" id="idUsuario" />
		</div>
	</div>
	<div class="form-group">
		<label for="respostaCorreta" class="col-md-4 control-label">RespostaCorreta</label>
		<div class="col-md-8">
			<textarea name="respostaCorreta" class="form-control" id="respostaCorreta"><?php echo ($this->input->post('respostaCorreta') ? $this->input->post('respostaCorreta') : $resposta['respostaCorreta']); ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="respostaUsuario" class="col-md-4 control-label">RespostaUsuario</label>
		<div class="col-md-8">
			<textarea name="respostaUsuario" class="form-control" id="respostaUsuario"><?php echo ($this->input->post('respostaUsuario') ? $this->input->post('respostaUsuario') : $resposta['respostaUsuario']); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
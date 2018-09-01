<?php echo form_open('conjuntodialogo/edit/'.$conjuntodialogo['idConjuntoDialogo'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="idDialogo" class="col-md-4 control-label">IdDialogo</label>
		<div class="col-md-8">
			<input type="text" name="idDialogo" value="<?php echo ($this->input->post('idDialogo') ? $this->input->post('idDialogo') : $conjuntodialogo['idDialogo']); ?>" class="form-control" id="idDialogo" />
		</div>
	</div>
	<div class="form-group">
		<label for="idDialogoFrases" class="col-md-4 control-label">IdDialogoFrases</label>
		<div class="col-md-8">
			<input type="text" name="idDialogoFrases" value="<?php echo ($this->input->post('idDialogoFrases') ? $this->input->post('idDialogoFrases') : $conjuntodialogo['idDialogoFrases']); ?>" class="form-control" id="idDialogoFrases" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
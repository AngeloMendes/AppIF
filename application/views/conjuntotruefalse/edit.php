<?php echo form_open('conjuntotruefalse/edit/'.$conjuntotruefalse['idConjuntoTrueFalse'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="idTrueFalseFrases" class="col-md-4 control-label">IdTrueFalseFrases</label>
		<div class="col-md-8">
			<input type="text" name="idTrueFalseFrases" value="<?php echo ($this->input->post('idTrueFalseFrases') ? $this->input->post('idTrueFalseFrases') : $conjuntotruefalse['idTrueFalseFrases']); ?>" class="form-control" id="idTrueFalseFrases" />
		</div>
	</div>
	<div class="form-group">
		<label for="idTrueFalse" class="col-md-4 control-label">IdTrueFalse</label>
		<div class="col-md-8">
			<input type="text" name="idTrueFalse" value="<?php echo ($this->input->post('idTrueFalse') ? $this->input->post('idTrueFalse') : $conjuntotruefalse['idTrueFalse']); ?>" class="form-control" id="idTrueFalse" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
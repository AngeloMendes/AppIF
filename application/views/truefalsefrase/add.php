<?php echo form_open('truefalsefrase/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="frase" class="col-md-4 control-label">Frase</label>
		<div class="col-md-8">
			<input type="text" name="frase" value="<?php echo $this->input->post('frase'); ?>" class="form-control" id="frase" />
		</div>
	</div>
	<div class="form-group">
		<label for="opcaoTrue" class="col-md-4 control-label">OpcaoTrue</label>
		<div class="col-md-8">
			<input type="text" name="opcaoTrue" value="<?php echo $this->input->post('opcaoTrue'); ?>" class="form-control" id="opcaoTrue" />
		</div>
	</div>
	<div class="form-group">
		<label for="opcaoFalse" class="col-md-4 control-label">OpcaoFalse</label>
		<div class="col-md-8">
			<input type="text" name="opcaoFalse" value="<?php echo $this->input->post('opcaoFalse'); ?>" class="form-control" id="opcaoFalse" />
		</div>
	</div>
	<div class="form-group">
		<label for="opcaoCorreta" class="col-md-4 control-label">OpcaoCorreta</label>
		<div class="col-md-8">
			<input type="text" name="opcaoCorreta" value="<?php echo $this->input->post('opcaoCorreta'); ?>" class="form-control" id="opcaoCorreta" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
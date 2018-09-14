<?php echo form_open('conjuntotruefalse/add',array("class"=>"form-horizontal")); ?>
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/css/style.css" type="text/css" />

	<div class="form-group">
        <div class="col-md-8  form-inputs">
            <label for="idTrueFalseFrases" >IdTrueFalseFrases</label>
            <input type="text" name="idTrueFalseFrases" value="<?php echo $this->input->post('idTrueFalseFrases'); ?>" class="form-control" id="idTrueFalseFrases" />
		</div>
	</div>
	<div class="form-group">
        <div class="col-md-8  form-inputs">
            <label for="idTrueFalse">IdTrueFalse</label>
            <input type="text" name="idTrueFalse" value="<?php echo $this->input->post('idTrueFalse'); ?>" class="form-control" id="idTrueFalse" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
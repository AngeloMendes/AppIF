<?php echo form_open('conjuntodialogo/add',array("class"=>"form-horizontal")); ?>
    <link rel="stylesheet" type="text/css" href="   ../application/views/css/style.css">

	<div class="form-group">
		<div class="col-md-8 form-inputs">
            <label for="idDialogo">IdDialogo</label>
            <input type="text" name="idDialogo" value="<?php echo $this->input->post('idDialogo'); ?>" class="form-control" id="idDialogo" />
		</div>
	</div>
	<div class="form-group">
        <div class="col-md-8 form-inputs">
            <label for="idDialogoFrases" >IdDialogoFrases</label>

            <input type="text" name="idDialogoFrases" value="<?php echo $this->input->post('idDialogoFrases'); ?>" class="form-control" id="idDialogoFrases" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
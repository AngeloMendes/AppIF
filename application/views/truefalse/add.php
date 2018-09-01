<?php echo form_open('truefalse/add',array("class"=>"form-horizontal")); ?>
    <div>
	<div class="form-group">
		<label for="titulo" class="col-md-4 control-label">Titulo</label>
		<div class="col-md-8">
			<input type="text" name="titulo" value="<?php echo $this->input->post('titulo'); ?>" class="form-control" id="titulo" />
		</div>
	</div>
	<div class="form-group">
		<label for="imagem" class="col-md-4 control-label">Imagem</label>
		<div class="col-md-8">
			<input type="text" name="imagem" value="<?php echo $this->input->post('imagem'); ?>" class="form-control" id="imagem" />
		</div>
	</div>
	<div class="form-group">
		<label for="video" class="col-md-4 control-label">Video</label>
		<div class="col-md-8">
			<input type="text" name="video" value="<?php echo $this->input->post('video'); ?>" class="form-control" id="video" />
		</div>
	</div>

        <div class="form-group">
            <div class="col-md-8 form-inputs">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" rows="9" id="descricao" name="descricao"
                          value="<?php echo $this->input->post('descricao'); ?>"></textarea>
            </div>
        </div>


<?php $this->load->view('truefalsefrase/add');?>

</div>
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
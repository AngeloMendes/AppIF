<?php echo form_open('usuario/edit/'.$usuario['idUsuario'],array("class"=>"form-horizontal")); ?>

    <div class="form-add">

	<div class="form-group">
    <div class="col-md-8  form-inputs">
        <label for="titulo">Nome</label>
        <input type="text" name="nome" value="<?php echo ($this->input->post('nome') ? $this->input->post('nome') : $usuario['nome']); ?>" class="form-control" id="nome" />

    </div></div>
	<div class="form-group">
    <div class="col-md-8  form-inputs">

        <label for="titulo">Pontos</label>
        <input type="text" name="pontos" value="<?php echo ($this->input->post('pontos') ? $this->input->post('pontos') : $usuario['pontos']); ?>" class="form-control" id="pontos" />

    </div></div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
    </div></div>
<?php echo form_close(); ?>
<?php echo $msg;?>
<?php echo form_open('usuario/login', array("class" => "form-horizontal")); ?>
<link rel="stylesheet" type="text/css" href="   ../application/views/css/style.css">




    <div class="form-add">
<div class="row">
    <div class="form-group">
        <div class="col-md-6  form-inputs">
            <label for="titulo">Digite seu nome: </label>
            <input type="text" name="nome" value="<?php echo $this->input->post('nome'); ?>" class="form-control"
                   id="nome"/>
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>


    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" name='login' value="login" class="btn btn-success">Entrar</button>
            <button type="submit" name='cadastrar' value="cadastrar" class="btn btn-primary">Cadastrar</button>
        </div>

    </div>
<?php echo form_close(); ?>
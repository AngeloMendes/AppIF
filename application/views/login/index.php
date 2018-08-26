
<?php echo $msg;?>
<?php echo form_open('usuario/login', array("class" => "form-horizontal")); ?>
    <div class="form-group">
        <label for="nome" class="col-md-4 control-label">Digite seu nome</label>
        <div class="col-md-8">
            <input type="text" name="nome" value="<?php echo $this->input->post('nome'); ?>" class="form-control"
                   id="nome"/>
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" name='login' value="login" class="btn btn-success">Entrar</button>
        </div>
        <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" name='cadastrar' value="cadastrar" class="btn btn-success">Cadastrar</button>
        </div>
    </div>
<?php echo form_close(); ?>
<?php echo form_open('usuario/login', array("class" => "form-horizontal")); ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>application/views/css/style.css" type="text/css"/>

<div align="center" class="form-add">

<div style="height: auto; width: 35%; margin-top: 10%;  "  class="panel panel-default container-fluid  hidden-xs hidden-sm">
    <div class="panel-body  ">

        <div>
            <div >
            <img class="img-responsive" src="<?php echo base_url();?>application/midias/ifetlogo.png" height=""  alt="">
            </div>
            <h2 class="form-signin-heading">Digite seu nome</h2>
            <div>
                <input type="text" id="nome" name="nome" value="<?php echo $this->input->post('nome'); ?>"
                       class="form-control" placeholder="Nome">
            </div>
            <div style="margin-top:5%">
                <?php echo $msg; ?>
            </div>
            <br>
            <button type="submit" name='login' value="login" class="btn btn-success">Entrar</button>
            <button type="submit" name='cadastrar' value="cadastrar" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>

</div>

<?php echo form_close(); ?>
</div>
<style>
    .login {
        background: #00CC00;
    }
</style>

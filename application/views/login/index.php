<?php echo form_open('usuario/login', array("class" => "form-horizontal")); ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>application/views/css/style.css" type="text/css"/>

<div align="center" class="form-add">

    <div style="height: auto; width: 75%; margin-top: 5%;  "
         class="panel panel-default container-fluid ">
        <div class="panel-body">

            <div>
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-responsive" src="<?php echo base_url(); ?>application/midias/logo.png" height=""
                             alt="">
                    </div>
                    <div class="col-md-8">
                        <img class="img-responsive" src="<?php echo base_url(); ?>application/midias/ifetlogo.png"
                             height=""
                             alt="">
                    </div>
                </div>

                <h2 class="form-signin-heading">Digite seu nome</h2>
                <div>
                    <input type="text" id="nome" name="nome" value="<?php echo $this->input->post('nome'); ?>"
                           class="form-control" placeholder="Nome">
                    <input type="text" id="turma" name="turma" value="<?php echo $this->input->post('turma'); ?>"
                           class="form-control" placeholder="turma">
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

</div>
<?php echo form_close(); ?>
</div>
<style>
    .login {
        background: #00CC00;
    }
</style>

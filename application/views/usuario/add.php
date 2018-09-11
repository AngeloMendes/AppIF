<?php echo form_open('usuario/add',array("class"=>"form-horizontal")); ?>
<link rel="stylesheet" type="text/css" href="   ../application/views/css/style.css">



<div class="form-add">

        <div class="form-group">
            <div class="col-md-8  form-inputs">
                <label for="titulo">Nome</label>
                <input type="text" name="nome" value="<?php echo $this->input->post('nome'); ?>" class="form-control"
                       id="nome"/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-8 form-inputs">
                <label for="pontos">Pontos</label>
                <input type="text" name="pontos" value="<?php echo $this->input->post('pontos'); ?>" class="form-control" id="pontos" />
            </div>
        </div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-8 ">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
        </div>
    </div>
</div>
<?php echo form_close(); ?>

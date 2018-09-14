<link rel="stylesheet" href="<?php echo base_url();?>application/views/css/style.css" type="text/css" />

<?php


?>
<div class="form-add">
    <div class="form-group">
        <div style="margin-top:5%" class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
            <h2 align="center" ><?php echo $licao['titulo'] ?></h2>
        </div>
    </div>
<div class="form-group">
    <div style="margin-top:5%" class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
        <h3 align="center" >   <?php echo $licao['descricao'] ?>
        </h3>
    </div>
</div>
<div class="form-group">
    <div align="center" style="margin-top:5%" class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
        <img  class="media-object" src="<?php echo $licao['imagem'] ?>"width="460" height="345">


    </div>
</div>

    <div class="form-group ">
        <div style="margin-top:5%" align="center"  class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2">
            <a href="<?php echo site_url('pergunta/iniciarLicao/' . $licao['idLicao'])?>"
               class="btn btn-primary btn-lg active" role="button">Iniciar</a>        </div>
    </div>
</div>

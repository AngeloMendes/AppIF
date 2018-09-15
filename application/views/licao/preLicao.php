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
        <?php  if($licao['imagem']!="" and $licao['imagem']!='error') {?>
            <img class="media-object" src="<?php echo $licao['imagem']; ?>" width="300" >
        <?php }?>
        <?php if(!empty($licao['video']) and $licao['video']!='error') { ?>
            <video id="video" class="" width="300" controls>
                <source src="<?= $licao['video'] ?>" type='video/<?= explode('.', $licao['video'])[1]; ?>'>
            </video>
        <?php } ?>



    </div>
</div>


    <div class="form-group ">
        <div style="margin-top:5%" align="center"  class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2">
            <a href="<?php echo site_url('pergunta/selectPergunta/' . $licao['idLicao']. '/'.'0')?>"
               class="btn btn-primary btn-lg active" role="button">Iniciar</a>        </div>
    </div>
</div>

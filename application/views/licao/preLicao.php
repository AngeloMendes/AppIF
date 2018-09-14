<?php


?>
<div>
    <span><?php echo $licao['titulo'] ?></span><br>
    <span><?php echo $licao['descricao'] ?></span><br>
    <span>
        <?php  if($licao['imagem']!="" and $licao['imagem']!='error') {?>
            <img src="<?php echo $licao['imagem']; ?>" height="100px">
        <?php }?>
    </span><br>



</div>
<a href="<?php echo site_url('pergunta/selectPergunta/' . $licao['idLicao']. '/'.'0')?>" >Iniciar</a>


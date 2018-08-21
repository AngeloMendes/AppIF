<?php


?>
<div>
    <span><?php echo $licao['titulo'] ?></span><br>
    <span><?php echo $licao['descricao'] ?></span><br>
    <span><?php echo $licao['imagem'] ?></span><br>


</div>
<a href="<?php echo site_url('pergunta/iniciarLicao/' . $licao['idLicao'])?>" >Iniciar</a>


<?php


?>
<div>
    <span><?php echo $licao->titulo ?></span><br>
    <span><?php echo $licao->descricao ?></span><br>
    <span><?php echo $licao->imagem ?></span><br>


</div>
<button type="button" class="btn btn-success"
        onclick="<?php redirect('pergunta/iniciarLicao/' . $cont) ?>">Iniciar
</button>

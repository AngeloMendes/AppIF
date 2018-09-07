<?php echo form_open('resposta/addDialogo/'.$dialogo->idLicao . '/'.$dialogo->idLicao, array("class" => "form-horizontal")); ?>
<div>
    <?php
    /*LISTAR PERGUNTAS DE UMA LIÇÃO
    -trazer todas as perguntas
    -mostrar de uma em uma para o usuário responder
    -ao terminar o tempo, mostrar a pontuação
    -chamar a próxima perguntar

    */

    $t = time();
    $data_inicio = new DateTime();
    $data_inicio = $data_inicio->format('Y/m/d H:i:s');
    ?>

    <span> <?php echo $dialogo->titulo; ?></span><br>
    <span> <?php echo $dialogo->descricao; ?></span><br>
    <span>
                    <?php if ($dialogo->imagem != "" and $dialogo->imagem != 'error') { ?>
                        <img src="<?php echo $dialogo->imagem; ?>" height="100px">
                    <?php } ?>
    </span>
    <br>
    <? $i=1?>
    <?php foreach ($dialogoFrases as $dialogoFrase) { ?>
        <span> <?php echo $dialogoFrase->descricao; ?></span><br>
        <input type="radio" name=<?php echo "resposta".$i; ?> id=<?php echo "resposta1[".$i."]"; ?> value="<?php echo $dialogoFrase->opcao1; ?>"> <label
                for=<?php echo "resposta1[".$i."]"; ?>><?php echo $dialogoFrase->opcao1; ?></label> <br>
        <input type="radio" name=<?php echo "resposta".$i; ?> id=<?php echo "resposta2[".$i."]"; ?> value="<?php echo $dialogoFrase->opcao2; ?>"> <label
                for=<?php echo "resposta2[".$i."]"; ?>><?php echo $dialogoFrase->opcao2; ?></label> <br>
        <input type="radio" name=<?php echo "resposta".$i; ?> id=<?php echo "resposta3[".$i."]"; ?> value="<?php echo $dialogoFrase->opcao3; ?>"> <label
                for=<?php echo "resposta3[".$i."]"; ?>><?php echo $dialogoFrase->opcao3; ?></label> <br>
        <input type="hidden" name=<?php echo "respostaCorreta".$i; ?>
               value="<?php echo $dialogoFrase->opcaoCorreta; ?>">  <br>
    <?php } ?>
    <input type="hidden" name="data" value="<?=$data_inicio; ?>">
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8 ">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
        </div>
    </div>

</div>
<?php echo form_close(); ?>
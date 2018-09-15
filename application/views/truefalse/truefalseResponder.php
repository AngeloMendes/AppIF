<?php echo form_open('resposta/addTrueFalse', array("class" => "form-horizontal")); ?>
    <input type="hidden" name="trueFalse" value="<?=htmlspecialchars(json_encode($truefalse));?>"/>
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

        <span> <?php echo $truefalse->titulo; ?></span><br>
        <span> <?php echo $truefalse->descricao; ?></span><br>
        <span>
                    <?php if ($truefalse->imagem != "" and $truefalse->imagem != 'error') { ?>
                        <img src="<?php echo $truefalse->imagem; ?>" height="100px">
                    <?php } ?>
        </span>
        <span>
        <?php if(!empty($truefalse->video) and $truefalse->video!='error') { ?>
            <video id="video" class="" width="240" height="160" controls>
                    <source src="<?= $truefalse->video ?>" type='video/<?= explode('.', $truefalse->video)[1]; ?>'>
                </video>
        <?php } ?>
        </span>

        <br>
        <?php $i=1; $j=0;?>
        <?php $truefalse = get_object_vars($truefalse);?>
        <?php while (isset($truefalse['frase'.$i])) { ?>
            <span> <?php echo $truefalse['frase'.$i]; ?></span><br>
            <input type="radio" name=<?php echo "resposta".$i; ?> id=<?php echo "resposta1[".$i."]"; ?> value="<?= $i/2==0? $truefalse['frase'.$i][$j]['opcaoFalse'] : $truefalse['frase'.$i][$j]['opcaoTrue']; ?>"> <label
                for=<?php echo "resposta1[".$i."]"; ?>><?= $i/2==0? $truefalse['frase'.$i][$j]['opcaoTrue'] : $truefalse['frase'.$i][$j]['opcaoFalse']; ?></label> <br>
            <input type="radio" name=<?php echo "resposta".$i; ?> id=<?php echo "resposta2[".$i."]"; ?> value="<?= $i/2==0? $truefalse['frase'.$i][$j]['opcaoTrue'] : $truefalse['frase'.$i][$j]['opcaoFalse']; ?>"> <label
                for=<?php echo "resposta2[".$i."]"; ?>><?= $i/2==0? $truefalse['frase'.$i][$j]['opcaoFalse'] : $truefalse['frase'.$i][$j]['opcaoTrue']; ?></label> <br>
             <input type="hidden" name=<?php echo "respostaCorreta".$i; ?>
            value="<?php echo $truefalse['frase'.$i][$j]['opcaoCorreta']; ?>">  <br>
        <?php $i++;} ?>
        <input type="hidden" name="data" value="<?=$data_inicio; ?>">
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8 ">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
            </div>
        </div>

    </div>
<?php echo form_close(); ?>
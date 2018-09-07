<?php echo form_open('resposta/addTrueFalse/', array("class" => "form-horizontal")); ?>
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

        <span> <?php echo $trueFalse->titulo; ?></span><br>
        <span> <?php echo $trueFalse->descricao; ?></span><br>
        <span>
                    <?php if ($trueFalse->imagem != "" and $trueFalse->imagem != 'error') { ?>
                        <img src="<?php echo $trueFalse->imagem; ?>" height="100px">
                    <?php } ?>
        </span>
        <span>
        <?php if(!empty($trueFalse->video) and $trueFalse->video!='error') { ?>
            <video id="video" class="" width="240" height="160" controls>
                    <source src="<?= $trueFalse->video ?>" type='video/<?= explode('.', $trueFalse->video)[1]; ?>'>
                </video>
        <?php } ?>
        </span>

        <br>
        <? $i=1?>
        <?php foreach ($trueFalseFrases as $trueFalseFrase) { ?>
            <span> <?php echo $trueFalseFrase->descricao; ?></span><br>
            <input type="radio" name=<?php echo "resposta".$i; ?> id=<?php echo "resposta1[".$i."]"; ?> value="<?php echo $trueFalseFrase->opcao1; ?>"> <label
                for=<?php echo "resposta1[".$i."]"; ?>><?php echo $trueFalseFrase->opcao1; ?></label> <br>
            <input type="radio" name=<?php echo "resposta".$i; ?> id=<?php echo "resposta2[".$i."]"; ?> value="<?php echo $trueFalseFrase->opcao2; ?>"> <label
                for=<?php echo "resposta2[".$i."]"; ?>><?php echo $trueFalseFrase->opcao2; ?></label> <br>
             <input type="hidden" name=<?php echo "respostaCorreta".$i; ?>
            value="<?php echo $trueFalseFrase->opcaoCorreta; ?>">  <br>
        <?php } ?>
        <input type="hidden" name="data" value="<?=$data_inicio; ?>">
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8 ">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
            </div>
        </div>

    </div>
<?php echo form_close(); ?>
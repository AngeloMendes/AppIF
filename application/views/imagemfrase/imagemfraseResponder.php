<?php echo form_open('resposta/addImagemFrase', array("class" => "form-horizontal")); ?>
    <input type="hidden" name="imagemFrase" value="<?=htmlspecialchars(json_encode($imagemfrase));?>"/>
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

        <span> <?php echo $imagemfrase->titulo; ?></span><br>
        <span> <?php echo $imagemfrase->descricao; ?></span><br>
        <span>
                    <?php if ($imagemfrase->imagem != "" and $imagemfrase->imagem != 'error') { ?>
                        <img src="<?php echo $imagemfrase->imagem; ?>" height="100px">
                    <?php } ?>
        </span>
        <span>
        <?php if (!empty($imagemfrase->video) and $imagemfrase->video != 'error') { ?>
            <video id="video" class="" width="240" height="160" controls>
                    <source src="<?= $imagemfrase->video ?>" type='video/<?= explode('.', $imagemfrase->video)[1]; ?>'>
                </video>
        <?php } ?>
        </span>

        <br>

        <input type="radio" name="resposta" id="resposta1" value="<?php echo $imagemfrase->frase1; ?>"> <label for="resposta1"><?php echo $imagemfrase->frase1;?></label>
        <input type="radio" name="resposta" id="resposta2" value="<?php echo $imagemfrase->frase2; ?>"> <label for="resposta2"><?php echo $imagemfrase->frase2;?></label> <br>
        <input type="radio" name="resposta" id="resposta3" value="<?php echo $imagemfrase->frase3; ?>"> <label for="resposta3"><?php echo $imagemfrase->frase3;?></label>
        <input type="radio" name="resposta" id="resposta4" value="<?php echo $imagemfrase->frase4; ?>"> <label for="resposta4"><?php echo $imagemfrase->frase4;?></label> <br>
        <input type="radio" name="resposta" id="resposta5" value="<?php echo $imagemfrase->frase5; ?>"> <label for="resposta5"><?php echo $imagemfrase->frase5;?></label>
        <input type="radio" name="resposta" id="resposta6" value="<?php echo $imagemfrase->frase6; ?>"> <label for="resposta6"><?php echo $imagemfrase->frase6;?></label> <br>
        <input type="radio" name="resposta" id="resposta7" value="<?php echo $imagemfrase->frase7; ?>"> <label for="resposta7"><?php echo $imagemfrase->frase7;?></label>
        <input type="radio" name="resposta" id="resposta8" value="<?php echo $imagemfrase->frase8; ?>"> <label for="resposta8"><?php echo $imagemfrase->frase8;?></label> <br>
        <input type="hidden" name="respostaCorreta" id="respostaCorreta" value="<?php echo $imagemfrase->fraseCorreta; ?>">


        <input type="hidden" name="data" value="<?= $data_inicio; ?>">
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8 ">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
            </div>
        </div>

    </div>
<?php echo form_close(); ?>
<?php echo form_open('resposta/addImagemFrase/', array("class" => "form-horizontal")); ?>
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

        <span> <?php echo $imagemFrase->titulo; ?></span><br>
        <span> <?php echo $imagemFrase->descricao; ?></span><br>
        <span>
                    <?php if ($imagemFrase->imagem != "" and $imagemFrase->imagem != 'error') { ?>
                        <img src="<?php echo $imagemFrase->imagem; ?>" height="100px">
                    <?php } ?>
        </span>
        <span>
        <?php if (!empty($imagemFrase->video) and $imagemFrase->video != 'error') { ?>
            <video id="video" class="" width="240" height="160" controls>
                    <source src="<?= $imagemFrase->video ?>" type='video/<?= explode('.', $imagemFrase->video)[1]; ?>'>
                </video>
        <?php } ?>
        </span>

        <br>

        <input type="radio" name="resposta" id="resposta1" value="<?php echo $imagemFrase->frase1; ?>"> <label for="resposta1"><?php echo $imagemFrase->frase1;?></label>
        <input type="radio" name="resposta" id="resposta2" value="<?php echo $imagemFrase->frase2; ?>"> <label for="resposta2"><?php echo $imagemFrase->frase2;?></label> <br>
        <input type="radio" name="resposta" id="resposta3" value="<?php echo $imagemFrase->frase3; ?>"> <label for="resposta3"><?php echo $imagemFrase->frase3;?></label>
        <input type="radio" name="resposta" id="resposta4" value="<?php echo $imagemFrase->frase4; ?>"> <label for="resposta4"><?php echo $imagemFrase->frase4;?></label> <br>
        <input type="radio" name="resposta" id="resposta5" value="<?php echo $imagemFrase->frase5; ?>"> <label for="resposta5"><?php echo $imagemFrase->frase5;?></label>
        <input type="radio" name="resposta" id="resposta6" value="<?php echo $imagemFrase->frase6; ?>"> <label for="resposta6"><?php echo $imagemFrase->frase6;?></label> <br>
        <input type="radio" name="resposta" id="resposta7" value="<?php echo $imagemFrase->frase7; ?>"> <label for="resposta7"><?php echo $imagemFrase->frase7;?></label>
        <input type="radio" name="resposta" id="resposta8" value="<?php echo $imagemFrase->frase8; ?>"> <label for="resposta8"><?php echo $imagemFrase->frase8;?></label> <br>
        <input type="hidden" name="respostaCorreta" id="respostaCorreta" value="<?php echo $imagemFrase->fraseCorreta; ?>">


        <input type="hidden" name="data" value="<?= $data_inicio; ?>">
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8 ">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
            </div>
        </div>

    </div>
<?php echo form_close(); ?>
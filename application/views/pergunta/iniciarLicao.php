<?php echo form_open('resposta/add', array("class" => "form-horizontal")); ?>
<input type="hidden" name="pergunta" value="<?=htmlspecialchars(json_encode($pergunta));?>"/>

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
    <!--TRAZER as informações das perguntas e ENVIAR o id do usuario, a resposta escolhida, a resposta correta e o tempo-->
    <span> <?php echo $pergunta->titulo; ?></span><br>
    <span> <?php echo $pergunta->descricao; ?></span><br>
    <span>
        <?php if (!empty($pergunta->video) and $pergunta->video != 'error') { ?>
            <video id="video" class="" width="240" height="160" controls>
                    <source src="<?= $pergunta->video ?>" type='video/<?= explode('.', $pergunta->video)[1]; ?>'>
                </video>
        <?php } ?>
    </span>

    <span>
                    <?php  if($pergunta->imagem!="" and $pergunta->imagem!='error') {?>
                        <img src="<?php echo $pergunta->imagem; ?>" height="100px">
                    <?php }?>
    </span>
    <br>

    <input type="radio" name="resposta" id="resposta1" value="<?php echo $pergunta->opcao1; ?>"/> <label for="resposta1"><?php echo $pergunta->opcao1;?></label> <br>
    <input type="radio" name="resposta" id="resposta2" value="<?php echo $pergunta->opcao2; ?>"/> <label for="resposta2"><?php echo $pergunta->opcao2;?></label> <br>
    <input type="radio" name="resposta" id="resposta3" value="<?php echo $pergunta->opcao3; ?>"/> <label for="resposta3"><?php echo $pergunta->opcao3;?></label> <br>
    <input type="radio" name="resposta" id="resposta4" value="<?php echo $pergunta->opcao4; ?>"/> <label for="resposta4"><?php echo $pergunta->opcao4;?></label> <br>
    <input type="hidden" name="respostaCorreta"  value="<?php echo $pergunta->opcaoCorreta; ?>"/>

    <input type="hidden" name="data" value="<?=$data_inicio; ?>"/>



    <span> <?php echo $pergunta->caixaTexto; ?></span>


    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8 ">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
        </div>
    </div>
</div>
<?php echo form_close(); ?>

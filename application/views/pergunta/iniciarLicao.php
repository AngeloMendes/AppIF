<?php echo form_open('resposta/add/'.$perguntas.'/'.$cont, array("class" => "form-horizontal")); ?>

<div>
    <?php
    /*LISTAR PERGUNTAS DE UMA LIÇÃO
    -trazer todas as perguntas
    -mostrar de uma em uma para o usuário responder
    -ao terminar o tempo, mostrar a pontuação
    -chamar a próxima perguntar

    */
    //$pergunta = $_POST['pergunta'];

    $t = time();
    $data_inicio = new DateTime(date("Y-m-d\TH:i:sP", $t));
    ?>
    TRAZER as informações das perguntas e ENVIAR o id do usuario, a resposta escolhida, a resposta correta e o tempo
    <span> <?php echo $pergunta['titulo']; ?></span><br>
    <span> <?php echo $pergunta['descricao']; ?></span><br>
    <span> <?php echo $pergunta['video']; ?></span><br>
    <span> <?php echo $pergunta['imagem']; ?></span><br>

    <input type="radio" name="resposta" id="resposta1" value="<?php echo $pergunta['opcao1']; ?>"> <label for="resposta1">Opção 1</label> <br>
    <input type="radio" name="resposta" id="resposta2" value="<?php echo $pergunta['opcao2']; ?>"> <label for="resposta2">Opção 2</label> <br>
    <input type="radio" name="resposta" id="resposta3" value="<?php echo $pergunta['opcao3']; ?>"> <label for="resposta3">Opção 3</label> <br>
    <input type="radio" name="resposta" id="resposta4" value="<?php echo $pergunta['opcao4']; ?>"> <label for="resposta4">Opção 4</label> <br>

    <input type="hidden" name="respostaCorreta" value="<?php echo $pergunta['opcaoCorreta']; ?>"
    <input type="hidden" name="idUsuario" value="<?php echo get_valor_sessao("idUsuario") ?>">
    <input type="hidden" name="idLicao" value="<?php echo $pergunta['idLicao']; ?>">
    <input type="hidden" name="idPergunta" value="<?php echo $pergunta['idPergunta']; ?>">
    <!--<input type="hidden" name="tempo" value="<?php $data_inicio->diff(new DateTime(date("Y-m-d\TH:i:sP", $t)))->s ?>">-->

    <span> <?php echo $pergunta['caixaTexto']; ?></span>


    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8 ">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
        </div>
    </div>
</div>
<?php echo form_close(); ?>

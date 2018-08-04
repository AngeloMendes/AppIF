<?php echo form_open('resposta/add', array("class" => "form-horizontal")); ?>

<div>
    <?php
    /*LISTAR PERGUNTAS DE UMA LIÇÃO
    -trazer todas as perguntas
    -mostrar de uma em uma para o usuário responder
    -ao terminar o tempo, mostrar a pontuação
    -chamar a próxima perguntar

    */
    $perguntas = $_POST['perguntas'];
    $cont = $_POST['cont'];
    $t = time();
    $data_inicio = new DateTime(date("Y-m-d\TH:i:sP", $t));
    ?>
    TRAZER as informações das perguntas e ENVIAR o id do usuario, a resposta escolhida, a resposta correta e o tempo
    <span> <?php echo $perguntas[$cont]['titulo']; ?></span><br>
    <span> <?php echo $perguntas[$cont]['descricao']; ?></span><br>
    <span> <?php echo $perguntas[$cont]['video']; ?></span><br>
    <span> <?php echo $perguntas[$cont]['imagem']; ?></span><br>

    <input type="radio" name="resposta" id="resposta1" value="<?php echo $perguntas[$cont]['opcao1']; ?>"> <label for="resposta1">Opção 1</label> <br>
    <input type="radio" name="resposta" id="resposta2" value="<?php echo $perguntas[$cont]['opcao2']; ?>"> <label for="resposta2">Opção 2</label> <br>
    <input type="radio" name="resposta" id="resposta3" value="<?php echo $perguntas[$cont]['opcao3']; ?>"> <label for="resposta3">Opção 3</label> <br>
    <input type="radio" name="resposta" id="resposta4" value="<?php echo $perguntas[$cont]['opcao4']; ?>"> <label for="resposta4">Opção 4</label> <br>

    <input type="hidden" name="respostaCorreta" value="<?php echo $perguntas[$cont]['opcaoCorreta']; ?>"
    <input type="hidden" name="idUsuario" value="<?php echo 'PEGAR USUARIO DA SESSAO'; ?>">
    <!--<input type="hidden" name="tempo" value="<?php $data_inicio->diff(new DateTime(date("Y-m-d\TH:i:sP", $t)))->s ?>">-->

    <span> <?php echo $perguntas[$cont]['caixaTexto']; ?></span>


    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8 ">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
        </div>
    </div>
</div>
<?php echo form_close(); ?>

<?php echo form_open('licao/add', array("class" => "form-horizontal")); ?><?php echo form_open('licao/add', array("class" => "form-horizontal")); ?>
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
    ?>
    TRAZER as informações das perguntas e ENVIAR o id do usuario, a resposta escolhida, a resposta correta e o tempo
    <span> <?php echo $perguntas[$cont]['titulo']; ?></span>
    <span> <?php echo $perguntas[$cont]['descricao']; ?></span>
    <span> <?php echo $perguntas[$cont]['video']; ?></span>
    <span> <?php echo $perguntas[$cont]['imagem']; ?></span>
    <span> <?php echo $perguntas[$cont]['opcao1']; ?></span>
    <span> <?php echo $perguntas[$cont]['opcao2']; ?></span>
    <span> <?php echo $perguntas[$cont]['opcao3']; ?></span>
    <span> <?php echo $perguntas[$cont]['opcao4']; ?></span>
    <span> <?php echo $perguntas[$cont]['caixaTexto']; ?></span>



    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8 ">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
        </div>
    </div>
</div>
<?php echo form_close(); ?>

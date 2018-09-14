<?php error_reporting(E_ERROR | E_PARSE); ?>
<!--<a href="<?php base_url('resposta/index/' . $respostas . '/'.$pergunta) ?>">Atualizar Ranking</a>-->
<?php if (isset($respostas)) {?>

    <?php foreach($respostas as $resposta){?>
    <div>
        <h3>Sua Resposta:</h3>
        <p><?= $resposta['arrayRespostaUsuario'] ?></p>
    </div> <br>
    <div>
        <h3>Resposta Correta:</h3>
        <p><?= $resposta['arrayRespostaCorreta'] ?></p>
    </div>
    <?php } ?>
<?php } ?>
    <table class="table table-striped table-bordered">
        <tr>
            <th>Nome</th>
            <th>Pontos</th>
        </tr>
        <?php foreach ($ranking as $usuario) { ?>
            <tr>
                <td><?php echo $usuario['nome']; ?></td>
                <td><?php echo $usuario['pontos']; ?></td>
            </tr>
        <?php } ?>
    </table>

<?php if (!isset($respostas)) { ?>
    <a href="<?= base_url('licao/index') ?>">Lições</a>
<?php } else {

    ?>

    <?php echo form_open('pergunta/selectPergunta/' . $pergunta->idLicao.'/'.$pergunta->ordem, array("class" => "form-horizontal")); ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" class="btn btn-success">Próxima Pergunta</button>
        </div>
    </div>

    <?php echo form_close(); ?>


<?php } ?>
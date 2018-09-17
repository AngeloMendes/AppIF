<?php error_reporting(E_ERROR | E_PARSE); ?>

<link rel="stylesheet" href="<?php echo base_url();?>application/views/css/style.css" type="text/css" />
<?php if (isset($respostas)) {?>

<div class="form-add">
    <div align="center" class="col-md-6 col-md-offset-3">       <h1>Correção</h1>
    </div>
    <?php foreach($respostas as $resposta){?>

       <div class="col-md-4 col-md-offset-1">
        <h3>Sua Resposta:</h3>
        <p><?= $resposta['arrayRespostaUsuario'] ?></p>
    </div>

       <div class="col-md-4 col-md-offset-1">
        <h3>Resposta Correta:</h3>
        <p><?= $resposta['arrayRespostaCorreta'] ?></p>
    </div>
    <?php } ?>
<?php } ?>
    <h2><?php echo $msgFim;?></h2>
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
    <a href="<?php base_url('resposta/rankingFinal/') ?>">Ranking Final (esperar todos acabarem)</a>
<?php } else {

    ?>

    <?php echo form_open('pergunta/selectPergunta/' . $pergunta->idLicao.'/'.$pergunta->ordem, array("class" => "form-horizontal")); ?>

    <div >
        <div align="center">
            <button type="submit" class="btn btn-success">Próxima Pergunta</button>
        </div>
    </div>

    <?php echo form_close(); ?>


<?php } ?></div>
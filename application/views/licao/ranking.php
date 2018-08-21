<?php $totalPerguntas=count($perguntas);?>
<div>
    <h3>Resposta Correta:</h3>
    <p><?= $respostaCorreta?></p>
</div>

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

<?php if ($cont == $totalPerguntas) { ?>
    <a href="<?= base_url('licao/index') ?>">Lições</a>
<?php } else {
    $cont++;
    ?>
    <a href="<?= base_url('pergunta/proximaPergunta/'.$perguntas.'/' . $cont) ?>">Próxima Pergunta</a>
<?php } ?>
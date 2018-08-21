<?php $totalPerguntas = count($perguntas); ?>

    <div>
        <h3>Resposta Correta:</h3>
        <p><?= $respostaCorreta ?></p>
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

<?php if ($cont == $totalPerguntas-1) { ?>
    <a href="<?= base_url('licao/index') ?>">Lições</a>
<?php } else {
    $cont++;
    ?>

    <?php echo form_open('pergunta/proximaPergunta/' . $cont, array("class" => "form-horizontal")); ?>

    <input type="hidden" name="perguntas" value="<?php echo htmlspecialchars(json_encode($perguntas)); ?>"

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" class="btn btn-success">Próxima Pergunta</button>
        </div>
    </div>

    <?php echo form_close(); ?>


<?php } ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>application/views/css/style.css" type="text/css"/>
<?php echo form_open('resposta/addDialogo', array("class" => "form-horizontal")); ?>
<input type="hidden" name="dialogo" value="<?= htmlspecialchars(json_encode($dialogo)); ?>"/>
<div class="form-add">
    <?php

    $t = time();
    $data_inicio = new DateTime();
    $data_inicio = $data_inicio->format('Y/m/d H:i:s');
    ?>


    <div class="form-group">
        <div style="margin-top:1%" class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
            <h1 align="center"><?php echo $dialogo->titulo; ?></h1>
        </div>
    </div>
    <div class="form-group">
        <div style="margin-top:1%" class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
            <h2 align="center">  <?php echo $dialogo->descricao; ?>
            </h2>
        </div>
    </div>
    <div class="form-group">
        <div align="center" class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
            <?php if ($dialogo->imagem != "" and $dialogo->imagem != 'error') { ?>
                <img src="<?php echo $dialogo->imagem; ?>">
            <?php } ?>
            <?php if (!empty($dialogo->video) and $dialogo->video != 'error') {
                $extensao = explode('.', $dialogo->video); ?>
                <video id="video" class="" controls>
                    <source src="<?= $dialogo->video ?>" type='video/<?= $extensao[count($extensao) - 1]; ?>'>
                </video>
            <?php } ?>
        </div>
    </div>
    <br>
    <div class="form-group">
        <?php $i = 1;
        $j = 0; ?>
        <?php $dialogo = get_object_vars($dialogo); ?>

        <?php while (isset($dialogo['frase' . $i])) { ?>
            <div class="btn-group-toggle" data-toggle="buttons" align="center">
                <div class="form-group">
                    <div class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
                        <h1 align="center"><?php echo $dialogo['frase' . $i][$j]['descricao']; ?></h1>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
                        <h2 align="center"><?php echo $dialogo['frase' . $i][$j]['frase']; ?></h2>
                    </div>
                </div>
                <label style="margin: 1% 1% 1% 1%"
                       class="btn btn-success col-xs-12 col-sm-10 col-md-5  col-sm-offset-2 col-md-offset-1"
                       for=<?php echo "resposta1[" . $i . "]"; ?>><?php echo $dialogo['frase' . $i][$j]['opcao1']; ?>
                    <input type="radio" name=<?php echo "resposta" . $i; ?> id=<?php echo "resposta1[" . $i . "]"; ?>
                           value="<?php echo $dialogo['frase' . $i][$j]['opcao1']; ?>">
                </label>
                <label style="margin: 1% 1% 1% 1%"
                       class="btn btn-info col-xs-12 col-sm-10 col-md-5 col-sm-offset-2 col-md-offset-1"
                       for=<?php echo "resposta2[" . $i . "]"; ?>><?php echo $dialogo['frase' . $i][$j]['opcao2']; ?>
                    <input type="radio" name=<?php echo "resposta" . $i; ?> id=<?php echo "resposta2[" . $i . "]"; ?>
                           value="<?php echo $dialogo['frase' . $i][$j]['opcao2']; ?>">
                </label>
                <label style="margin: 1% 1% 1% 1%"
                       class="btn btn-warning col-xs-12 col-sm-10 col-md-5 col-sm-offset-2 col-md-offset-1"
                       for=<?php echo "resposta3[" . $i . "]"; ?>><?php echo $dialogo['frase' . $i][$j]['opcao3']; ?>
                    <input type="radio" name=<?php echo "resposta" . $i; ?> id=<?php echo "resposta3[" . $i . "]"; ?>
                           value="<?php echo $dialogo['frase' . $i][$j]['opcao3']; ?>">
                </label>
                <input type="hidden"
                       name="<?php echo "respostaCorreta" . $i; ?>"
                       value="<?php echo $dialogo['frase' . $i][$j]['opcaoCorreta']; ?>">
                <br>
            </div>
            <?php $i++;
        } ?>

    </div>
    <input type="hidden" name="data" value="<?= $data_inicio; ?>">
    <div>
        <div align="center" class="col-sm-offset-2 col-sm-8 ">
            <button style="margin: 3% 1% 1% 1%" type="submit" class="btn btn-primary btn-lg btn-block">Próxima</button>
        </div>
    </div>

</div>

<?php echo form_close(); ?>
<style>
    .btn-success {
        border-color: #7bc143;
        color: #1f1d1d;
        background-color: #8c9b9c;
    }

    .btn-danger {
        border-color: #c13930;
        color: #1f1d1d;
        background-color: #8c9b9c;
    }

    .btn-info {
        border-color: #60b6c1;
        color: #1f1d1d;
        background-color: #8c9b9c;
    }

    .btn-warning {
        border-color: #c1bf1d;
        color: #1f1d1d;
        background-color: #8c9b9c;
    }
</style>

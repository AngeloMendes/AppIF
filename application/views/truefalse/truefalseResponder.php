<link rel="stylesheet" href="<?php echo base_url(); ?>application/views/css/style.css" type="text/css"/>

<?php echo form_open('resposta/addTrueFalse', array("class" => "form-horizontal")); ?>
    <input type="hidden" name="trueFalse" value="<?= htmlspecialchars(json_encode($truefalse)); ?>"/>
<div class="form-add">
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


    <div class="form-group">
        <div style="margin-top:2%" class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
            <h1 align="center"><?php echo $truefalse->titulo; ?></h1>
        </div>
    </div>
    <div class="form-group">
        <div style="margin-top:2%" class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
            <h2 align="center">  <?php echo $truefalse->descricao; ?>
            </h2>
        </div>
    </div>
    <div class="form-group">
        <div align="center" style="margin-top:2%"
             class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
            <?php if ($truefalse->imagem != "" and $truefalse->imagem != 'error') { ?>
                <img src="<?php echo $truefalse->imagem; ?>">
            <?php } ?>
        </div>
    </div>
    <div class="form-group">
        <div align="center" style="margin-top:2%"
             class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
            <?php if(!empty($truefalse->video) and $truefalse->video!='error') {
                $extensao = explode('.', $truefalse->video); ?>
                <video id="video" controls>
                    <source src="<?= $truefalse->video ?>" type='video/<?= $extensao[count($extensao) - 1]; ?>'>
                </video>
            <?php } ?>
        </div>
    </div>

    <div class="form-group">

        <br>
        <?php $i = 1;
        $j = 0; ?>
        <?php $truefalse = get_object_vars($truefalse); ?>
        <?php while (isset($truefalse['frase' . $i])) { ?>
        <div class="btn-group-toggle" data-toggle="buttons" align="center">
            <div class="form-group">
                <div style="margin-top:2%" class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
                    <h3 align="center"><?php echo $truefalse['frase' . $i][$j]['frase']; ?></h3>
                </div>
            </div>

            <label style="margin: 1% 1% 1% 1%" class="btn btn-success "
                   for=<?php echo "resposta2[" . $i . "]"; ?>><?= $truefalse['frase' . $i][$j]['opcaoTrue']; ?>
                <input type="radio" name=<?php echo "resposta" . $i; ?> id=<?php echo "resposta2[" . $i . "]"; ?>
                       value="<?= $truefalse['frase' . $i][$j]['opcaoTrue']; ?>">
            </label>
            <label style="margin: 1% 1% 1% 1%" class="btn  btn-danger"
                   for=<?php echo "resposta1[" . $i . "]"; ?>><?= $truefalse['frase' . $i][$j]['opcaoFalse']; ?>
                <input type="radio" name=<?php echo "resposta" . $i; ?> id=<?php echo "resposta1[" . $i . "]"; ?>
                       value="<?= $truefalse['frase' . $i][$j]['opcaoFalse']; ?>">
            </label>
            <br>
            <input type="hidden" name=<?php echo "respostaCorreta" . $i; ?>
            value="<?php echo $truefalse['frase' . $i][$j]['opcaoCorreta']; ?>">  <br>
        </div>
            <?php $i++;
        } ?></div>
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


<?php echo form_open('resposta/addImagemFrase', array("class" => "form-horizontal")); ?>
<input type="hidden" name="imagemFrase" value="<?= htmlspecialchars(json_encode($imagemfrase)); ?>"/>
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
                <h1 align="center"><?php echo $imagemfrase->titulo; ?></h1>
            </div>
        </div>
        <div class="form-group">
            <div style="margin-top:2%" class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
                <h2 align="center">  <?php echo $imagemfrase->descricao; ?>
                </h2>
            </div>
        </div>

        <div class="form-group">
            <div align="center"
                 class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
                <?php if ($imagemfrase->imagem != "" and $imagemfrase->imagem != 'error') { ?>
                    <img src="<?php echo $imagemfrase->imagem; ?>" height="240px">
                <?php } ?>
                <?php if (!empty($imagemfrase->video) and $imagemfrase->video != 'error') {
                    $extensao = explode('.', $imagemfrase['video']); ?>
                    <video id="video" class="" width="240" height="160" controls>
                        <source src="<?= $imagemfrase->video ?>" type='video/<?= $extensao[count($extensao) - 1]; ?>'>
                    </video>
                <?php } ?>
            </div>
        </div>

        <div class="row btn-group-toggle col-md-offset-1" data-toggle="buttons">
            <label style="margin: 1% 1% 1% 1%" class="btn btn-success col-xs-12 col-sm-10 col-md-5 col-sm-offset-2">
                <input type="radio" id="resposta1" name="resposta" autocomplete="off"
                       value="<?php echo $imagemfrase->frase1; ?>"> <?php echo $imagemfrase->frase1; ?>
            </label>
            <label style="margin: 1% 1% 1% 1%" class="btn btn-info col-xs-12 col-sm-10 col-md-5  col-sm-offset-2">
                <input type="radio" id="resposta2" name="resposta" autocomplete="off"
                       value="<?php echo $imagemfrase->frase2; ?>"> <?php echo $imagemfrase->frase2; ?>
            </label>
            <label style="margin: 1% 1% 1% 1%" class="btn btn-danger col-xs-12 col-sm-10 col-md-5 col-sm-offset-1">
                <input type="radio" id="resposta3" name="resposta" autocomplete="off"
                       value="<?php echo $imagemfrase->frase3; ?>"> <?php echo $imagemfrase->frase3; ?>
            </label>
            <label style="margin: 1% 1% 1% 1%" class="btn btn-warning col-xs-12 col-sm-10 col-md-5  col-sm-offset-1">
                <input type="radio" id="resposta4" name="resposta" autocomplete="off"
                       value="<?php echo $imagemfrase->frase4; ?>"> <?php echo $imagemfrase->frase4; ?>
            </label>
            <label style="margin: 1% 1% 1% 1%" class="btn btn-success col-xs-12 col-sm-10 col-md-5  col-sm-offset-1">
                <input type="radio" id="resposta5" name="resposta" autocomplete="off"
                       value="<?php echo $imagemfrase->frase5; ?>"> <?php echo $imagemfrase->frase5; ?>
            </label>
            <label style="margin: 1% 1% 1% 1%" class="btn btn-info col-xs-12 col-sm-10 col-md-5  col-sm-offset-2">
                <input type="radio" id="resposta6" name="resposta" autocomplete="off"
                       value="<?php echo $imagemfrase->frase6; ?>"> <?php echo $imagemfrase->frase6; ?>
            </label>
            <label style="margin: 1% 1% 1% 1%" class="btn btn-danger col-xs-12 col-sm-10 col-md-5 col-sm-offset-1">
                <input type="radio" id="resposta7" name="resposta" autocomplete="off"
                       value="<?php echo $imagemfrase->frase7; ?>"> <?php echo $imagemfrase->frase7; ?>
            </label>
            <label style="margin: 1% 1% 1% 1%" class="btn btn-warning col-xs-12 col-sm-10 col-md-5  col-sm-offset-1">
                <input type="radio" id="resposta8" name="resposta" autocomplete="off"
                       value="<?php echo $imagemfrase->frase8; ?>"> <?php echo $imagemfrase->frase8; ?>
            </label>
        </div>
        <input type="hidden" name="respostaCorreta" id="respostaCorreta"
               value="<?php echo $imagemfrase->fraseCorreta; ?>">


        <input type="hidden" name="data" value="<?= $data_inicio; ?>">
        <div>
            <div class="col-sm-offset-2 col-sm-8 ">
                <button style="margin: 2% 1% 1% 1%" type="submit" class="btn btn-primary btn-lg btn-block">Próxima
                </button>
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

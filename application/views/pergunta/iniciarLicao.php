<?php echo form_open('resposta/add', array("class" => "form-horizontal")); ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>application/views/css/style.css" type="text/css"/>

<input type="hidden" name="pergunta" value="<?= htmlspecialchars(json_encode($pergunta)); ?>"/>

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
    <!--TRAZER as informações das perguntas e ENVIAR o id do usuario, a resposta escolhida, a resposta correta e o tempo-->
        <div class="form-group">
            <div style="margin-top:3%" class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
                <h1 align="center"><?php echo $pergunta->titulo; ?></h1>
            </div>
        </div>
        <div class="form-group">
            <div style="margin-top:3%" class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
                <h2 align="center">  <?php echo $pergunta->descricao; ?>
                </h2>
            </div>
        </div>
        <div class="form-group">
            <div align="center"
                 class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
                <?php if ($pergunta->imagem != "" and $pergunta->imagem != 'error') { ?>
                    <img src="<?php echo $pergunta->imagem; ?>" height="240px">
                <?php } ?>
                <?php if (!empty($pergunta->video) and $pergunta->video != 'error') {
                    $extensao = explode('.', $pergunta->video); ?>
                    <video id="video" class="" width="240" height="160" controls>
                        <source src="<?= $pergunta->video ?>" type='video/<?= $extensao[count($extensao) - 1]; ?>'>
                    </video>
                <?php } ?>
            </div>
        </div>


        <br>
        <div class="row btn-group-toggle col-md-offset-1" data-toggle="buttons">


            <label style="margin: 1% 1% 1% 1%" class="btn btn-success col-xs-12 col-sm-10 col-md-5 col-sm-offset-2">
                <input type="radio" id="opt1" name="resposta" autocomplete="off"
                       value="<?php echo $pergunta->opcao1; ?>"> <?php echo $pergunta->opcao1; ?>
            </label>
            <label style="margin: 1% 1% 1% 1%" class="btn btn-info col-xs-12 col-sm-10 col-md-5  col-sm-offset-2">
                <input type="radio" id="opt2" name="resposta" autocomplete="off"
                       value="<?php echo $pergunta->opcao2; ?>"> <?php echo $pergunta->opcao2; ?>
            </label>


            <label style="margin: 1% 1% 1% 1%" class="btn btn-danger col-xs-12 col-sm-10 col-md-5 col-sm-offset-1">
                <input type="radio" id="opt3" name="resposta" autocomplete="off"
                       value="<?php echo $pergunta->opcao3; ?>"> <?php echo $pergunta->opcao3; ?>
            </label>
            <?php if (!$pergunta->opcao4) { //trocar para isset
                echo "<!--";
            } ?>
            <label style="margin: 1% 1% 1% 1%" class="btn btn-warning col-xs-12 col-sm-10 col-md-5  col-sm-offset-1">
                <input type="radio" id="opt4" name="resposta" autocomplete="off"
                       value="<?php echo $pergunta->opcao4; ?>"> <?php echo $pergunta->opcao4; ?>
            </label>
            <?php if (!$pergunta->opcao4) {
                echo "-->";
            } ?>
            <?php if (!$pergunta->opcao5) {
                echo "<!--";
            } ?>
            <label style="margin: 1% 1% 1% 1%" class="btn btn-info col-xs-12 col-sm-10 col-md-5  col-sm-offset-1">
                <input type="radio" name="resposta" autocomplete="off"
                       value="<?php echo $pergunta->opcao5; ?>"/> <?php echo $pergunta->opcao5; ?>
            </label>
            <?php if (!$pergunta->opcao5) {
                echo "-->";
            } ?>


        </div>

        <input type="hidden" name="respostaCorreta" value="<?php echo $pergunta->opcaoCorreta; ?>"/>
        <input type="hidden" name="data" value="<?= $data_inicio; ?>"/>


        <div>
            <div align="center" style="margin: 3% 1% 1% 1%" class="col-md-10 col-md-offset-1">
                <div class="form-group">
                    <?php echo $pergunta->caixaTexto; ?>
                </div>
            </div>
        </div>


        <div>
            <div class="col-sm-offset-2 col-sm-8 ">
                <button style="margin: 3% 1% 1% 1%" type="submit" class="btn btn-primary btn-lg btn-block">Próxima
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
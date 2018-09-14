<?php echo form_open('resposta/add', array("class" => "form-horizontal")); ?>
<link rel="stylesheet" href="<?php echo base_url();?>application/views/css/style.css" type="text/css" />

<input type="hidden" name="pergunta" value="<?=htmlspecialchars(json_encode($pergunta));?>"/>

<div>
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
    <div class="form-add">
        <div class="form-group">
            <div style="margin-top:5%" class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
                <h2 align="center" ><?php echo $pergunta->titulo; ?></h2>
            </div>
        </div>
        <div class="form-group">
            <div style="margin-top:5%" class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
                <h3 align="center" >  <?php echo $pergunta->descricao; ?>
                </h3>
            </div>
        </div>
    <span>
        <?php if (!empty($pergunta->video) and $pergunta->video != 'error') { ?>
            <video id="video" class="" width="240" height="160" controls>
                    <source src="<?= $pergunta->video ?>" type='video/<?= explode('.', $pergunta->video)[1]; ?>'>
                </video>
        <?php } ?>
    </span>

    <span>
                    <?php  if($pergunta->imagem!="" and $pergunta->imagem!='error') {?>
                        <img src="<?php echo $pergunta->imagem; ?>" height="100px">
                    <?php }?>
    </span>
    <br>
        <div  class="row btn-group-toggle col-md-offset-1" data-toggle="buttons">

                <label style="margin: 1% 1% 1% 1%"class="btn btn-danger  col-xs-12 col-sm-10 col-md-5 col-sm-offset-2">
                    <input type="radio" name="resposta" autocomplete="off">  <?php echo $pergunta->opcao1; ?>
                </label>
                <label style="margin: 1% 1% 1% 1%"class="btn btn-success  col-xs-12 col-sm-10 col-md-5  col-sm-offset-2">
                    <input type="radio" name="resposta" autocomplete="off">  <?php echo $pergunta->opcao2; ?>
                </label>


                <label style="margin: 1% 1% 1% 1%"class="btn btn-warning col-xs-12 col-sm-10 col-md-5 col-sm-offset-1">
                    <input type="radio" name="resposta" autocomplete="off">  <?php echo $pergunta->opcao3; ?>
                </label>
                <label style="margin: 1% 1% 1% 1%"class="btn btn-info col-xs-12 col-sm-10 col-md-5  col-sm-offset-1">
                    <input type="radio" name="resposta" autocomplete="off">  <?php echo $pergunta->opcao4; ?>
                </label>


        </div>




    <input type="hidden" name="respostaCorreta"  value="<?php echo $pergunta->opcaoCorreta; ?>"/>

    <input type="hidden" name="data" value="<?=$data_inicio; ?>"/>



    <span> <?php echo $pergunta->caixaTexto; ?></span>


    <div >
        <div class="col-sm-offset-2 col-sm-8 ">
            <button  style="margin: 3% 1% 1% 1%" type="submit" class="btn btn-primary btn-lg btn-block">Próxima</button>
        </div>
    </div>
</div>
<?php echo form_close(); ?>

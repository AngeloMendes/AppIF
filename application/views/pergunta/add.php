<?php echo form_open_multipart('pergunta/add/'.$idLicao, array("class" => "form-horizontal")); ?>
<link rel="stylesheet" href="<?php echo base_url();?>application/views/css/style.css" type="text/css" />

<div class="form-add">

    <div class="form-group">
        <div class="col-md-8  form-inputs">
            <input type="hidden" name="idLicao" value="<?php echo $idLicao; ?>" id="idLicao"/>
        </div>
    </div>
    <div>
        <div class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
            <h1 align="center" for="titulo">Múltipla escolha</h1>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" value="<?php echo $this->input->post('titulo'); ?>" class="form-control"
                   id="titulo"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" rows="9" id="descricao" name="descricao"
                      value="<?php echo $this->input->post('descricao'); ?>"></textarea>
        </div>
    </div>
    <div class="row">


    </div>
    <div class="row">

        <div class="col-xs-12 col-sm-10 col-md-4 col-md-offset-2 col-sm-offset-1">
            <label for="video">Adicione imagem </label>

            <div class="form-group files">

                <input type="file" name="imagem" value="<?php echo $this->input->post('imagem'); ?>"
                       class="form-control"
                       id="imagem" multiple=""></div>
        </div>
        <div class="col-xs-12 col-sm-10 col-md-4 col-md-offset-0 col-sm-offset-1">

            <label for="video">Adicione video </label>

            <div class="form-group files">

                <input type="file" name="video" value="<?php echo $this->input->post('video'); ?>"
                       class="form-control"
                       id="video" multiple=""></div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <label style="margin: 3% 3% 3% 3%" for="opcao1">Opção 1</label>
            <input type="text" name="opcao1" value="<?php echo $this->input->post('opcao1'); ?>" class="form-control"
                   id="opcao1"/>
        </div>
        <div class="col-md-4  col-md-offset-2">
            <label  style="margin: 3% 3% 3% 3%" for="opcao2">Opção 2</label>
            <input type="text" name="opcao2" value="<?php echo $this->input->post('opcao2'); ?>" class="form-control"
                   id="opcao2"/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <label style="margin: 3% 3% 3% 3%" for="opcao3">Opção 3</label>
            <input type="text" name="opcao3" value="<?php echo $this->input->post('opcao3'); ?>" class="form-control"
                   id="opcao1"/>
        </div>
        <div class="col-md-4  col-md-offset-2">
            <label style="margin: 3% 3% 3% 3%" for="opcao4">Opção 4</label>
            <input type="text" name="opcao4" value="<?php echo $this->input->post('opcao4'); ?>" class="form-control"
                   id="opcao2"/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <label style="margin: 3% 3% 3% 3%" for="opcao5">Opção 5</label>
            <input type="text" name="opcao5" value="<?php echo $this->input->post('opcao5'); ?>" class="form-control"
                   id="opcao5"/>
        </div>
        <div class="col-md-4  col-md-offset-2">
            <label style="margin: 3% 3% 3% 3%" for="opcaoCorreta">Opção Correta</label>
            <input type="text" name="opcaoCorreta" value="<?php echo $this->input->post('opcaoCorreta'); ?>" class="form-control"
                   id="opcaoCorreta"/>
        </div>
    </div>


    <div class="form-group">
        <div class="col-md-8 form-inputs">
            <label style="margin-top: 3% " for="caixaTexto">Observações</label>
            <textarea class="form-control" rows="9" id="caixaTexto" name="caixaTexto"
                      value="<?php echo $this->input->post('caixaTexto'); ?>"></textarea>
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4 ">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
        </div>
    </div>
</div>
<?php echo form_close(); ?>

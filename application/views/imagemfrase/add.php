<link rel="stylesheet" type="text/css" href="   ../application/views/css/style.css">
<?php echo form_open('imagemfrase/add', array("class" => "form-horizontal")); ?>

<div class="form-group">
    <div class="col-md-8  form-inputs">
        <label for="titulo">Título</label>
        <input type="text" name="titulo" value="<?php echo $this->input->post('titulo'); ?>" class="form-control"
               id="titulo"/>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-1">
        <label for="video">Adicione uma imagem </label>
        <div class="form-group files">

            <input type="file" name="imagem" value="<?php echo $this->input->post('imagem'); ?>"
                   class="form-control"
                   id="imagem" multiple=""></div>
    </div>
    <div class="col-md-4 col-md-offset-2">
        <label for="video">Adicione um video </label>
        <div class="form-group files">
            <input type="file" name="video" value="<?php echo $this->input->post('video'); ?>"
                   class="form-control"
                   id="video" multiple=""></div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-8 form-inputs">
        <label for="descricao">Descrição</label>
        <textarea class="form-control" rows="9" id="descricao" name="descricao"
                  value="<?php echo $this->input->post('descricao'); ?>"></textarea>
    </div>
</div>

<div class="row">
    <div class="col-md-4 col-md-offset-1">
        <label style="margin: 3% 3% 3% 3%" for="frase1">Frase 1</label>
        <input type="text" name="frase1" value="<?php echo $this->input->post('frase1'); ?>" class="form-control"
               id="frase1"/>
    </div>
    <div class="col-md-4  col-md-offset-2">
        <label  style="margin: 3% 3% 3% 3%" for="frase2">Frase 2</label>
        <input type="text" name="frase2" value="<?php echo $this->input->post('frase2'); ?>" class="form-control"
               id="frase2"/>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-1">
        <label style="margin: 3% 3% 3% 3%" for="frase3">Frase 3</label>
        <input type="text" name="frase3" value="<?php echo $this->input->post('frase3'); ?>" class="form-control"
               id="frase3"/>
    </div>
    <div class="col-md-4  col-md-offset-2">
        <label style="margin: 3% 3% 3% 3%" for="frase4">Frase 4</label>
        <input type="text" name="frase4" value="<?php echo $this->input->post('frase4'); ?>" class="form-control"
               id="frase4"/>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-1">
        <label style="margin: 3% 3% 3% 3%" for="frase5">Frase 5</label>
        <input type="text" name="frase5" value="<?php echo $this->input->post('frase5'); ?>" class="form-control"
               id="frase5"/>
    </div>
    <div class="col-md-4  col-md-offset-2">
        <label style="margin: 3% 3% 3% 3%" for="frase6">Frase 6</label>
        <input type="text" name="frase6" value="<?php echo $this->input->post('frase6'); ?>" class="form-control"
               id="frase6"/>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-1">
        <label style="margin: 3% 3% 3% 3%" for="frase7">Frase 7</label>
        <input type="text" name="frase7" value="<?php echo $this->input->post('frase7'); ?>" class="form-control"
               id="frase7"/>
    </div>
    <div class="col-md-4  col-md-offset-2">
        <label style="margin: 3% 3% 3% 3%" for="frase8">Frase 8</label>
        <input type="text" name="frase8" value="<?php echo $this->input->post('frase8'); ?>" class="form-control"
               id="frase8"/>
    </div>
</div>
<div class="form-group">
    <div class="col-md-4 col-md-offset-1">
        <label style="margin: 3% 3% 3% 3%" for="fraseCorreta">Frase correta</label>
        <input type="text" name="fraseCorreta" value="<?php echo $this->input->post('fraseCorreta'); ?>"
               class="form-control"
               id="fraseCorreta"/>
    </div>
</div>



<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-success">Save</button>
    </div>
</div>

<?php echo form_close(); ?>


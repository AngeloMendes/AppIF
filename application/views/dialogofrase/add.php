<script>
    var i = 1;

</script>

<div class="form-group">
    <div class="col-md-8 form-inputs">
        <label for="descricao">Descrição</label>
        <textarea class="form-control" rows="9" id="descricao" name="descricao"
                  value="<?php echo $this->input->post('descricao'); ?>"></textarea>
    </div>
</div>
<div class="form-group">
    <label for="frase" class="col-md-4 control-label">Frase</label>
    <div class="col-md-8">
        <input type="text" name="frase" value="<?php echo $this->input->post('frase'); ?>" class="form-control"
               id="frase"/>
    </div>
</div>
<div class="form-group">
    <label for="opcao1" class="col-md-4 control-label">Opcao1</label>
    <div class="col-md-8">
        <input type="text" name="opcao1" value="<?php echo $this->input->post('opcao1'); ?>" class="form-control"
               id="opcao1"/>
    </div>
</div>
<div class="form-group">
    <label for="opcao2" class="col-md-4 control-label">Opcao2</label>
    <div class="col-md-8">
        <input type="text" name="opcao2" value="<?php echo $this->input->post('opcao2'); ?>" class="form-control"
               id="opcao2"/>
    </div>
</div>
<div class="form-group">
    <label for="opcao3" class="col-md-4 control-label">Opcao3</label>
    <div class="col-md-8">
        <input type="text" name="opcao3" value="<?php echo $this->input->post('opcao3'); ?>" class="form-control"
               id="opcao3"/>
    </div>
</div>
<div class="form-group">
    <label for="opcaoCorreta" class="col-md-4 control-label">OpcaoCorreta</label>
    <div class="col-md-8">
        <input type="text" name="opcaoCorreta" value="<?php echo $this->input->post('opcaoCorreta'); ?>"
               class="form-control" id="opcaoCorreta"/>
    </div>
</div>
<input type="button" id="filldetails" class="btn btn-success" onclick="addFields()" value="Adicionar Frase">

<div id="container"/>


<script type='text/javascript'>
    function addFields() {

        buildFields("descricao[Frase" + i + "][]", "<?php echo $this->input->post('descricao'); ?>", "Descrição", true);
        buildFields("frase[Frase" + i + "][]", "<?php echo $this->input->post('frase'); ?>", "Frase", false);
        buildFields("opcao1[Frase" + i + "][]", "<?php echo $this->input->post('opcao1'); ?>", "Opção 1", false);
        buildFields("opcao2[Frase" + i + "][]", "<?php echo $this->input->post('opcao2'); ?>", "Opção 2", false);
        buildFields("opcao3[Frase" + i + "][]", "<?php echo $this->input->post('opcao3'); ?>", "Opção 3", false);
        buildFields("opcao4[Frase" + i + "][]", "<?php echo $this->input->post('opcao4'); ?>", "Opção 4", false);
        buildFields("opcaoCorreta[Frase" + i + "][]", "<?php echo $this->input->post('opcaoCorreta'); ?>", "Opção Correta", false);
        i++;

    }



    function buildFields(inputNome, valor, texto, hr) {

        var container = document.getElementById("container");
        var divExterna = document.createElement("div");
        divExterna.className = "form-group";
        var divInterna = document.createElement("div");
        divInterna.className = "col-md-8";
        if(hr) {
            var textArea = document.createElement("textarea");
            textArea.rows = '9';
            textArea.name = inputNome;
            textArea.className="form-control";
            divInterna.appendChild(textArea);
        }else {
            var input = document.createElement("input");
            input.type = "text";
            input.name = inputNome;
            input.className = "form-control";
            input.value = valor;
            input.id = inputNome;
            divInterna.appendChild(input);
        }
        var label = document.createElement("label");
        label.htmlFor = inputNome;
        label.className = "col-md-4 control-label";
        label.appendChild(document.createTextNode(texto));
        divExterna.appendChild(label);
        divExterna.appendChild(divInterna);

        if (hr) {
            container.appendChild(document.createElement("hr"));
            container.appendChild(document.getElementById("filldetails"));

        }
        container.appendChild(divExterna);
        container.appendChild(document.createElement("br"));
    }
</script>


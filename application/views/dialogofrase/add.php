<script>
    var i = 1;

</script>


<input type="button" id="filldetails" class="btn btn-success" onclick="addFields()" value="Adicionar Frase">

<div id="container"/>


<script type='text/javascript'>
    function addFields() {

        buildFields("Frase" + i + "[descricao]", "<?php echo $this->input->post('descricao'); ?>", "Descrição", true);
        buildFields("Frase" + i + "[frase]", "<?php echo $this->input->post('frase'); ?>", "Frase", false);
        buildFields("Frase" + i + "[opcao1]", "<?php echo $this->input->post('opcao1'); ?>", "Opção 1", false);
        buildFields("Frase" + i + "[opcao2]", "<?php echo $this->input->post('opcao2'); ?>", "Opção 2", false);
        buildFields("Frase" + i + "[opcao3]", "<?php echo $this->input->post('opcao3'); ?>", "Opção 3", false);
       
        buildFields("Frase" + i +"[opcaoCorreta]", "<?php echo $this->input->post('opcaoCorreta'); ?>", "Opção Correta", false);
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


<script>
    var i = 1;

</script>

<input type="button" id="filldetails" class="btn btn-success" onclick="addFields()" value="Adicionar Frase">
<div id="container"/>


<script type='text/javascript'>
    function addFields() {
        buildFields("frase[Frase" + i + "]", "<?php echo $this->input->post('frase'); ?>", "Frase", true);
        buildFields("opcaoTrue[Frase" + i + "]", "<?php echo $this->input->post('opcaoTrue'); ?>", "Opção True", false);
        buildFields("opcaoFalse[Frase" + i + "]", "<?php echo $this->input->post('opcaoFalse'); ?>", "Opção False", false);
        buildFields("opcaoCorreta[Frase" + i + "]", "<?php echo $this->input->post('opcaoCorreta'); ?>", "Opção Correta", false);
        i++;

    }

    function buildFields(inputNome, valor, texto, hr) {

        var container = document.getElementById("container");
        var divExterna = document.createElement("div");
        divExterna.className = "form-group";
        var divInterna = document.createElement("div");
        divInterna.className = "col-md-8";
        var input = document.createElement("input");
        input.type = "text";
        input.name = inputNome;
        input.className = "form-control";
        input.value = valor;
        input.id = inputNome;
        var label = document.createElement("label");
        label.htmlFor = inputNome;
        label.className = "col-md-4 control-label";
        label.appendChild(document.createTextNode(texto));
        divExterna.appendChild(label);
        divExterna.appendChild(divInterna);
        divInterna.appendChild(input);
        if (hr) {
            container.appendChild(document.createElement("hr"));
            container.appendChild(document.getElementById("filldetails"));

        }
        container.appendChild(divExterna);
        container.appendChild(document.createElement("br"));
    }
</script>


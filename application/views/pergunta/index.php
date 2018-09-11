<link rel="stylesheet" type="text/css" href="/AppIF/application/views/css/style.css">
<div style="margin: 3% 3% 3% 3%">
<div class="pull-right">
	<a href="<?php echo site_url('pergunta/add'); ?>" class="btn btn-success">Add</a>
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdPergunta</th>
		<th>Titulo</th>
		<th>Descricao</th>
		<th>Video</th>
		<th>Imagem</th>
		<th>Opcao1</th>
		<th>Opcao2</th>
		<th>Opcao3</th>
		<th>Opcao4</th>
		<th>IdLicao</th>
		<th>OpcaoCorreta</th>
		<th>CaixaTexto</th>
		<th>Actions</th>
    </tr>
	<?php foreach($pergunta as $P){ ?>
    <tr>
		<td><?php echo $P['idPergunta']; ?></td>
		<td><?php echo $P['titulo']; ?></td>
		<td><?php echo $P['descricao']; ?></td>
		<td><?php echo $P['video']; ?></td>
		<td><?php echo $P['imagem']; ?></td>
		<td><?php echo $P['opcao1']; ?></td>
		<td><?php echo $P['opcao2']; ?></td>
		<td><?php echo $P['opcao3']; ?></td>
		<td><?php echo $P['opcao4']; ?></td>
		<td><?php echo $P['idLicao']; ?></td>
		<td><?php echo $P['opcaoCorreta']; ?></td>
		<td><?php echo $P['caixaTexto']; ?></td>
		<td>
            <a href="<?php echo site_url('pergunta/edit/'.$P['idPergunta']); ?>" class="btn btn-info btn-xs">Edit</a>
            <a href="<?php echo site_url('pergunta/remove/'.$P['idPergunta']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

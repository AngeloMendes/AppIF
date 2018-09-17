<link rel="stylesheet" href="<?php echo base_url();?>application/views/css/style.css" type="text/css" />
<div style="margin: 3% 3% 3% 3%">
<div class="pull-right">
	<a href="<?php echo site_url('imagemfrase/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdImagemFrase</th>
		<th>Titulo</th>
		<th>Imagem</th>
		<th>Video</th>
		<th>Descricao</th>
		<th>Frase1</th>
		<th>Frase2</th>
		<th>Frase3</th>
		<th>Frase4</th>
		<th>Frase5</th>
		<th>Frase6</th>
		<th>Frase7</th>
		<th>Frase8</th>
		<th>FraseCorreta</th>
		<th>IdLicao</th>
		<th>Ordem</th>
		<th>Actions</th>
    </tr>
	<?php foreach($imagemfrase as $I){ ?>
    <tr>
		<td><?php echo $I['idImagemFrase']; ?></td>
		<td><?php echo $I['titulo']; ?></td>
		<td><?php echo $I['imagem']; ?></td>
		<td><?php echo $I['video']; ?></td>
		<td><?php echo $I['descricao']; ?></td>
		<td><?php echo $I['frase1']; ?></td>
		<td><?php echo $I['frase2']; ?></td>
		<td><?php echo $I['frase3']; ?></td>
		<td><?php echo $I['frase4']; ?></td>
		<td><?php echo $I['frase5']; ?></td>
		<td><?php echo $I['frase6']; ?></td>
		<td><?php echo $I['frase7']; ?></td>
		<td><?php echo $I['frase8']; ?></td>
		<td><?php echo $I['fraseCorreta']; ?></td>
		<td><?php echo $I['idLicao']; ?></td>
		<td><?php echo $I['ordem']; ?></td>
		<td>
            <a href="<?php echo site_url('imagemfrase/edit/'.$I['idImagemFrase']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('imagemfrase/remove/'.$I['idImagemFrase']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

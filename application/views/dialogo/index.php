<link rel="stylesheet" type="text/css" href="   ../application/views/css/style.css">
<div style="margin: 3% 3% 3% 3%">
<div class="pull-right">
	<a href="<?php echo site_url('dialogo/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdDialogo</th>
		<th>Titulo</th>
		<th>Imagem</th>
		<th>Descricao</th>
		<th>Ordem</th>
		<th>IdLicao</th>
		<th>Actions</th>
    </tr>
	<?php foreach($dialogo as $D){ ?>
    <tr>
		<td><?php echo $D['idDialogo']; ?></td>
		<td><?php echo $D['titulo']; ?></td>
		<td><?php echo $D['imagem']; ?></td>
		<td><?php echo $D['descricao']; ?></td>
		<td><?php echo $D['ordem']; ?></td>
		<td><?php echo $D['idLicao']; ?></td>
		<td>
            <a href="<?php echo site_url('dialogo/edit/'.$D['idDialogo']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('dialogo/remove/'.$D['idDialogo']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

<div class="pull-right">
	<a href="<?php echo site_url('progresso/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdProgresso</th>
		<th>IdUsuario</th>
		<th>IdLicao</th>
		<th>IdPergunta</th>
		<th>Actions</th>
    </tr>
	<?php foreach($progresso as $P){ ?>
    <tr>
		<td><?php echo $P['idProgresso']; ?></td>
		<td><?php echo $P['idUsuario']; ?></td>
		<td><?php echo $P['idLicao']; ?></td>
		<td><?php echo $P['idPergunta']; ?></td>
		<td>
            <a href="<?php echo site_url('progresso/edit/'.$P['idProgresso']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('progresso/remove/'.$P['idProgresso']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

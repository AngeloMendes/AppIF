<div class="pull-right">
	<a href="<?php echo site_url('usuario/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdUsuario</th>
		<th>Nome</th>
		<th>Pontos</th>
		<th>Actions</th>
    </tr>
	<?php foreach($usuario as $U){ ?>
    <tr>
		<td><?php echo $U['idUsuario']; ?></td>
		<td><?php echo $U['nome']; ?></td>
		<td><?php echo $U['pontos']; ?></td>
		<td>
            <a href="<?php echo site_url('usuario/edit/'.$U['idUsuario']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('usuario/remove/'.$U['idUsuario']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

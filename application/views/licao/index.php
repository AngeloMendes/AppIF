<div class="pull-right">
	<a href="<?php echo site_url('licao/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdLicao</th>
		<th>Titulo</th>
		<th>Video</th>
		<th>Descricao</th>
		<th>Actions</th>
    </tr>
	<?php foreach($licao as $L){ ?>
    <tr>
		<td><?php echo $L['idLicao']; ?></td>
		<td><?php echo $L['titulo']; ?></td>
		<td><?php echo $L['video']; ?></td>
		<td><?php echo $L['descricao']; ?></td>
		<td>
            <a href="<?php echo site_url('licao/edit/'.$L['idLicao']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('licao/remove/'.$L['idLicao']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

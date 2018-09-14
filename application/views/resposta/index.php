<link rel="stylesheet" href="<?php echo base_url();?>application/views/css/style.css" type="text/css" />

<div class="pull-right">
	<a href="<?php echo site_url('resposta/add'); ?>" class="btn btn-success">Add</a>
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdResposta</th>
		<th>IdUsuario</th>
		<th>RespostaCorreta</th>
		<th>RespostaUsuario</th>
		<th>Actions</th>
    </tr>
	<?php foreach($resposta as $R){ ?>
    <tr>
		<td><?php echo $R['idResposta']; ?></td>
		<td><?php echo $R['idUsuario']; ?></td>
		<td><?php echo $R['respostaCorreta']; ?></td>
		<td><?php echo $R['respostaUsuario']; ?></td>
		<td>
            <a href="<?php echo site_url('resposta/edit/'.$R['idResposta']); ?>" class="btn btn-info btn-xs">Edit</a>
            <a href="<?php echo site_url('resposta/remove/'.$R['idResposta']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

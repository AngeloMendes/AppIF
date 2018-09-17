<link rel="stylesheet" href="<?php echo base_url();?>application/views/css/style.css" type="text/css" />
<div style="margin: 3% 3% 3% 3%">
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
		<td class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><?php echo $U['idUsuario']; ?></td>
		<td><?php echo $U['nome']; ?></td>
		<td class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><?php echo $U['pontos']; ?></td>
		<td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <a href="<?php echo site_url('usuario/edit/'.$U['idUsuario']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('usuario/remove/'.$U['idUsuario']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
</div>

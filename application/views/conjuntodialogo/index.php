<link rel="stylesheet" href="<?php echo base_url();?>application/views/css/style.css" type="text/css" />
<div style="margin: 3% 3% 3% 3%">

<div class="pull-right">
	<a href="<?php echo site_url('conjuntodialogo/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdConjuntoDialogo</th>
		<th>IdDialogo</th>
		<th>IdDialogoFrases</th>
		<th>Actions</th>
    </tr>
	<?php foreach($conjuntodialogo as $C){ ?>
    <tr>
		<td><?php echo $C['idConjuntoDialogo']; ?></td>
		<td><?php echo $C['idDialogo']; ?></td>
		<td><?php echo $C['idDialogoFrases']; ?></td>
		<td>
            <a href="<?php echo site_url('conjuntodialogo/edit/'.$C['idConjuntoDialogo']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('conjuntodialogo/remove/'.$C['idConjuntoDialogo']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
</div>
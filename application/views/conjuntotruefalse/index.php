<link rel="stylesheet" href="<?php echo base_url();?>application/views/css/style.css" type="text/css" />
<div style="margin: 3% 3% 3% 3%">
<div class="pull-right">
	<a href="<?php echo site_url('conjuntotruefalse/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdConjuntoTrueFalse</th>
		<th>IdTrueFalseFrases</th>
		<th>IdTrueFalse</th>
		<th>Actions</th>
    </tr>
	<?php foreach($conjuntotruefalse as $C){ ?>
    <tr>
		<td><?php echo $C['idConjuntoTrueFalse']; ?></td>
		<td><?php echo $C['idTrueFalseFrases']; ?></td>
		<td><?php echo $C['idTrueFalse']; ?></td>
		<td>
            <a href="<?php echo site_url('conjuntotruefalse/edit/'.$C['idConjuntoTrueFalse']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('conjuntotruefalse/remove/'.$C['idConjuntoTrueFalse']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

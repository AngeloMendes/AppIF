<div class="pull-right">
	<a href="<?php echo site_url('truefalsefrase/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdTrueFalseFrases</th>
		<th>Frase</th>
		<th>OpcaoTrue</th>
		<th>OpcaoFalse</th>
		<th>OpcaoCorreta</th>
		<th>Actions</th>
    </tr>
	<?php foreach($truefalsefrases as $T){ ?>
    <tr>
		<td><?php echo $T['idTrueFalseFrases']; ?></td>
		<td><?php echo $T['frase']; ?></td>
		<td><?php echo $T['opcaoTrue']; ?></td>
		<td><?php echo $T['opcaoFalse']; ?></td>
		<td><?php echo $T['opcaoCorreta']; ?></td>
		<td>
            <a href="<?php echo site_url('truefalsefrase/edit/'.$T['idTrueFalseFrases']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('truefalsefrase/remove/'.$T['idTrueFalseFrases']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

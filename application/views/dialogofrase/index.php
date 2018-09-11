<link rel="stylesheet" type="text/css" href="   ../application/views/css/style.css">
<div style="margin: 3% 3% 3% 3%">
<div class="pull-right">
	<a href="<?php echo site_url('dialogofrase/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdDialogoFrases</th>
		<th>Descricao</th>
		<th>Frase</th>
		<th>Opcao1</th>
		<th>Opcao2</th>
		<th>Opcao3</th>
		<th>OpcaoCorreta</th>
		<th>Actions</th>
    </tr>
	<?php foreach($dialogofrases as $D){ ?>
    <tr>
		<td><?php echo $D['idDialogoFrases']; ?></td>
		<td><?php echo $D['descricao']; ?></td>
		<td><?php echo $D['frase']; ?></td>
		<td><?php echo $D['opcao1']; ?></td>
		<td><?php echo $D['opcao2']; ?></td>
		<td><?php echo $D['opcao3']; ?></td>
		<td><?php echo $D['opcaoCorreta']; ?></td>
		<td>
            <a href="<?php echo site_url('dialogofrase/edit/'.$D['idDialogoFrases']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('dialogofrase/remove/'.$D['idDialogoFrases']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

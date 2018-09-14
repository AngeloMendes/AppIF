<link rel="stylesheet" href="<?php echo base_url();?>application/views/css/style.css" type="text/css" />


<div style="margin: 3% 3% 3% 3%">
    <div class="pull-right">
        <a href="<?php echo site_url('truefalse/add'); ?>" class="btn btn-success">Add</a>
    </div>
<table class="table table-striped table-bordered">

    <tr>
		<th>IdTrueFalse</th>
		<th>Titulo</th>
		<th>Imagem</th>
		<th>Video</th>
		<th>Ordem</th>
		<th>IdLicao</th>
		<th>Descricao</th>
		<th>Actions</th>
    </tr>
	<?php foreach($truefalse as $T){ ?>
    <tr>
		<td><?php echo $T['idTrueFalse']; ?></td>
		<td><?php echo $T['titulo']; ?></td>
		<td><?php echo $T['imagem']; ?></td>
		<td><?php echo $T['video']; ?></td>
		<td><?php echo $T['ordem']; ?></td>
		<td><?php echo $T['idLicao']; ?></td>
		<td><?php echo $T['descricao']; ?></td>
		<td>
            <a href="<?php echo site_url('truefalse/edit/'.$T['idTrueFalse']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('truefalse/remove/'.$T['idTrueFalse']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table></div>

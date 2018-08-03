
<table class="table table-striped table-bordered">
    <tr>
		<th>Nome</th>
		<th>Pontos</th>
    </tr>
	<?php foreach($ranking as $usuario){ ?>
    <tr>
		<td><?php echo $usuario['nome']; ?></td>
		<td><?php echo $usuario['pontos']; ?></td>
    </tr>
	<?php } ?>
</table>
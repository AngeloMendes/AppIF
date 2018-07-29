<div class="pull-right">
	<a href="<?php echo site_url('licao/add'); ?>" class="btn btn-success">Add</a> 
</div>

<!--<table class="table table-striped table-bordered">
    <tr>

		<th>Titulo</th>
        <th>Imagem</th>

		<th>Descricao</th>
		<th>Actions</th>
    </tr>-->
	<?php foreach($licao as $L){ ?>
        <a href="#=<?php echo $L['idLicao']; ?>">
            <div class="licao">
                <span>
                    <?php echo $L['imagem']; ?>
                </span>
                <span>
                    <?php echo $L['titulo']; ?>
                </span>
                <span>
                    <?php echo $L['descricao']; ?>
                </span>
            </div>
        </a>

	<?php } ?>

<style>
    .licao{
        margin: 50px 0 0 0;
    }
</style>
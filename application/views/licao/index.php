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
<?php foreach ($licao as $L) { ?>

    <div class="licao">
        <a href="#=<?php echo $L['idLicao']; ?>">
            <div id="chamarLicao">
                <span>
                    <img src="<?php echo $L['imagem']; ?>" height="100px">
                </span>
                <span>
                    <?php echo $L['titulo']; ?>
                </span>
                <span>
                    <?php echo $L['descricao']; ?>
                </span>
            </div>
        </a>
        <span>

            <?php if(!empty($L['video']) or $L['video']!='error') { ?>
                <video id="video" class="" width="240" height="160" controls>
                    <source src="<?= isset($L['video']) ? $L['video'] : ''; ?>" type='video/<?= (isset($L['video'])) ? explode('.', $L['video'])[1] : 'mp4'; ?>'>
                </video>
            <?php } ?>
        </span>
    </div>


<?php } ?>

<style>
    .licao {
        margin: 50px 0 0 0;
    }
</style>
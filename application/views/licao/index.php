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
                    <?php  if($L['imagem']!="" and $L['imagem']!='error') {?>
                        <img src="<?php echo $L['imagem']; ?>" height="100px">
                    <?php }?>
                </span>
                <span>
                    <?php echo $L['titulo']; ?>
                </span>
                <span>
                    <?php echo $L['descricao']; ?>
                </span>
                <span>
                    <a href="<?php echo site_url('pergunta/add/'.$L['idLicao']); ?>" class="btn btn-info btn-xs">Adicionar pergunta</a>
                </span>
            </div>
        </a>
        <span>

            <?php if(!empty($L['video']) and $L['video']!='error') { ?>
                <video id="video" class="" width="240" height="160" controls>
                    <source src="<?= $L['video'] ?>" type='video/<?= explode('.', $L['video'])[1]; ?>'>
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
<link rel="stylesheet" type="text/css" href="   ../application/views/css/style.css">


<div style="margin: 3% 3% 3% 3%">
<table class="table table-striped table-bordered">
    <tr>

		<th>Titulo</th>
        <th>Imagem</th>

		<th>Video</th>
        <th>Descricao</th>
		<th>Actions</th>
    </tr>
<?php foreach ($licao as $L) { ?>

<tr>
<div class="licao">
        <a href="#=<?php echo $L['idLicao']; ?>">
            <div id="chamarLicao">
                <td>
                    <?php echo $L['titulo']; ?>
                </td>
                <td>
                    <?php  if($L['imagem']!="" and $L['imagem']!='error') {?>
                        <img src="<?php echo $L['imagem']; ?>" height="100px">
                    <?php }?>
                </td>
                <td>

                    <?php if(!empty($L['video']) and $L['video']!='error') { ?>
                        <video id="video" class="" width="240" height="160" controls>
                            <source src="<?= $L['video'] ?>" type='video/<?= explode('.', $L['video'])[1]; ?>'>
                        </video>
                    <?php } ?>
                </td>

                <td>
                    <?php echo $L['descricao']; ?>
                </td>
                <td>
                    <a href="<?php echo site_url('pergunta/add/'.$L['idLicao']); ?>" class="btn btn-info btn-xs">Adicionar pergunta</a>

                    <a href="<?php echo site_url('licao/preLicao/'.$L['idLicao']); ?>" class="btn btn-info btn-xs">Iniciar lição</a>
                </td>
            </div>
        </a>

    </div>
</tr>




<?php } ?>
</table>
    <div class="form-group">
        <div class="col-sm-4 ">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Adicionar</button>
        </div>
    </div>
</div>
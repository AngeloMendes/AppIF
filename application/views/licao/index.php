<link rel="stylesheet" href="<?php echo base_url(); ?>application/views/css/style.css" type="text/css"/>
<?php isset($this->session->userdata['tipo']) ?: redirect('login/index'); ?>

<div style="margin: 3% 3% 3% 3%">
    <table class="table table-striped table-bordered">
        <tr>

            <th>Titulo</th>
            <th>Imagem</th>

            <th>Video</th>
            <th>Descricao</th>
            <?php if ($this->session->userdata['tipo'] != 'aluno') {
                echo "<th>Perguntas</th>";
            } ?>
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
                                <?php if ($L['imagem'] != "" and $L['imagem'] != 'error') { ?>
                                    <img src="<?php echo $L['imagem']; ?>" height="100px">
                                <?php } ?>
                            </td>
                            <td>

                                <?php if (!empty($L['video']) and $L['video'] != 'error') {
                                    $extensao = explode('.', $L['video']); ?>
                                    <video id="video" class="" width="340" height="160" controls>
                                        <source src="<?= $L['video'] ?>"
                                                type='video/<?= $extensao[count($extensao) - 1]; ?>'>
                                    </video>
                                <?php } ?>
                            </td>

                            <td>
                                <?php echo $L['descricao']; ?>
                            </td>

                            <?php if ($this->session->userdata['tipo'] == 'aluno') {
                                echo "<!--";
                            } ?>

                            <td align="center">
                                <a href="<?php echo site_url('pergunta/add/' . $L['idLicao']); ?>"
                                   class="btn  btn-default btn-xs">Múltipla escolha</a>
                                <a href="<?php echo site_url('truefalse/add/' . $L['idLicao']); ?>"
                                   class="btn  btn-default btn-xs">Verdadeiro ou falso</a>
                                <a href="<?php echo site_url('dialogo/add/' . $L['idLicao']); ?>"
                                   class="btn  btn-default btn-xs">Diálogo</a>
                                <a href="<?php echo site_url('imagemfrase/add/' . $L['idLicao']); ?>"
                                   class="btn btn-default btn-xs">Relacionar frases a imagem</a>


                            </td>
                            <?php if ($this->session->userdata['tipo'] == 'aluno') {
                                echo "-->";
                            } ?>
                            <td>
                                <?php if (isset($licoes_feitas) && in_array($L['idLicao'], $licoes_feitas)) { ?>
                                    <a href="<?php echo site_url('licao/refazerLicao/' . $L['idLicao']); ?>"
                                       class="btn btn-success btn-xs">Refazer lição</a><br><br>
                                    <a href="<?php echo site_url('resposta/index/' . $L['idLicao'] . '/' . null . '/' . null); ?>"
                                       class="btn btn-success btn-xs">Ranking</a>
                                <?php } else { ?>
                                    <a href="<?php echo site_url('licao/preLicao/' . $L['idLicao']); ?>"
                                       class="btn btn-success btn-xs">Iniciar lição</a><br><br>
                                <?php } ?>

                            </td>
                        </div>
                    </a>

                </div>
            </tr>


        <?php } ?>
    </table>
    <div class="form-group">
        <div class="col-sm-4 ">
            <a href="<?php echo site_url('licao/add'); ?>" class="btn btn-primary btn-lg btn-block">Adicionar</a>

        </div>
    </div>
</div>






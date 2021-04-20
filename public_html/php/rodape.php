<footer class="style1">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="widget-text">
                    <a href="<?php echo URL ?>"><img src="<?php echo URL . "wdadmin/uploads/informacoes_gerais/" . $voResultadoConfiguracoes->logo_principal ?>" title="<?php echo $voResultadoConfiguracoes->titulo ?>" alt="<?php echo $voResultadoConfiguracoes->titulo ?>"></a>
                    <?php
                    $vsSqlRodape = "SELECT resumo_texto FROM sobre";
                    $vrsExecutaRodape = mysqli_query($Conexao, $vsSqlRodape) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                    while ($voResultadoRodape = mysqli_fetch_object($vrsExecutaRodape)) {
                        ?>
                        <p><?php echo $voResultadoRodape->resumo_texto ?></p>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="widget-blog-feeds">
                    <h2 class="widget-title">Contatos</h2>
                    <ul>
                        <?php
                        $vsSqlContato = "SELECT endereco, cidade, estado, mapa, telefone FROM enderecos";
                        $vrsExecutaContato = mysqli_query($Conexao, $vsSqlContato) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                        while ($voResultadoContato = mysqli_fetch_object($vrsExecutaContato)) {
                            ?>
                            <li class="top clearfix">
                                <div class="text">
                                    <h3><a href="tel:55<?php echo str_replace(array("(", ")", "-", " "), "", $voResultadoContato->telefone) ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $voResultadoContato->telefone ?></a></h3>
                                </div>
                            </li>
                            <li class="center clearfix">
                                <div class="text">
                                    <h3><a href="mailto:<?php echo $voResultadoConfiguracoes->email ?>"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $voResultadoConfiguracoes->email ?></a></h3>
                                </div>
                            </li>
                            <li class="center clearfix">
                                <div class="text">
                                    <h3><a href="<?php echo $voResultadoContato->mapa ?>" target="blank"><i class="fa fa-map-marker-alt" aria-hidden="true"></i> <?php echo $voResultadoContato->endereco ?><br/><?php echo $voResultadoContato->cidade . " - " . $voResultadoContato->estado ?></a></h3>
                                </div>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-6">
                <div class="widget-pages widget-list">
                    <h2 class="widget-title">Links</h2>
                    <ul>
                        <li><a href="<?php echo URL . "institucional" ?>"><i class="ti-more-alt" aria-hidden="true"></i><span> Institucional</span></a></li>
                        <?php /*
                          <li><a href="<?php echo URL . "casos-de-sucesso" ?>"><i class="ti-more-alt" aria-hidden="true"></i><span> Casos de Sucesso</span></a></li>
                          <li><a href="<?php echo URL . "artigos" ?>"><i class="ti-more-alt" aria-hidden="true"></i><span> Artigos</span></a></li>
                         */ ?>
                        <li><a href="<?php echo URL . "contato" ?>"><i class="ti-more-alt" aria-hidden="true"></i><span> Contato</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="widget-privecy widget-list">
                    <h2 class="widget-title">Soluções</h2>
                    <ul>
                        <?php
                        $vsSqlSolucoes = "SELECT titulo, icone, imagem, url_amigavel FROM servicos WHERE status = 1";
                        $vrsExecutaSolucoes = mysqli_query($Conexao, $vsSqlSolucoes) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                        while ($voResultadoSolucoes = mysqli_fetch_object($vrsExecutaSolucoes)) {
                            ?>
                            <li><a href="<?php echo URL . "solucoes/" . $voResultadoSolucoes->url_amigavel ?>" title=""><i class="ti-more-alt" aria-hidden="true"></i><span><?php echo $voResultadoSolucoes->titulo ?></span></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="wrap-bottom clearfix">
                    <div class="title-bottom">
                        <p><a class="color-white" href="<?php echo URL ?>" target="blank"><?php echo $voResultadoConfiguracoes->nome_empresa ?></a>. Todos direitos reservados</p>
                    </div>
                    <div class="social-bottom">
                        <a href="https://webdezan.com.br" target="blank"><img src="<?php echo URL . "image/logo-wd.png" ?>" title="Web Dezan - Agência Digital" alt="Web Dezan - Agência Digital"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
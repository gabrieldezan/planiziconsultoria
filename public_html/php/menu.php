<header class="style4" id="header">
    <div id="site-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="header-wrap clearfix">
                        <div class="logo style4">
                            <a href="<?php echo URL ?>"><img src="<?php echo URL . "wdadmin/uploads/informacoes_gerais/" . $voResultadoConfiguracoes->logo_principal ?>" title="<?php echo $voResultadoConfiguracoes->titulo ?>" alt="<?php echo $voResultadoConfiguracoes->titulo ?>"></a>
                        </div>
                        <div class="mobile-button">
                            <span></span>
                        </div>
                        <div class="nav-wrap ">
                            <nav id="mainnav" class="mainnav">
                                <ul class="menu">
                                    <li>
                                        <a href="<?php echo URL ?>">HOME</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo URL . "institucional" ?>">INSTITUCIONAL</a>
                                    </li>
                                    <li>
                                        <a class="cursor-pointer">SOLUÇÕES</a>
                                        <ul class="sub-menu">
                                            <?php
                                            $vsSqlSolucoes = "SELECT titulo, url_amigavel FROM servicos ORDER BY titulo";
                                            $vrsExecutaSolucoes = mysqli_query($Conexao, $vsSqlSolucoes) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                                            while ($voResultadoSolucoes = mysqli_fetch_object($vrsExecutaSolucoes)) {
                                                ?>
                                                <li><a href="<?php echo URL . "solucoes/" . $voResultadoSolucoes->url_amigavel ?>" title=""> <?php echo $voResultadoSolucoes->titulo ?></a></li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                    <?php /*
                                      <li>
                                      <a href="<?php echo URL . "parceiros" ?>">PARCEIROS</a>
                                      </li>
                                      <li>
                                      <a href="<?php echo URL . "casos-de-sucesso" ?>">CASOS DE SUCESSO</a>
                                      </li>
                                      <li>
                                      <a href="<?php echo URL . "artigos" ?>">ARTIGOS</a>
                                      </li>
                                     */ ?>
                                    <li>
                                        <a href="<?php echo URL . "contato" ?>">CONTATO</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="search clearfix">
                            <ul>
                                <li><a target="blank" href="https://api.whatsapp.com/send?l=pt_BR&phone=55<?php echo str_replace(array("(", ")", "-", " "), "", $voResultadoConfiguracoes->whatsapp) ?>"><i class="fab fa-whatsapp" title="Whatsapp" aria-hidden="true"></i></a></li>
                                <?php
                                $vsSqlRedesSociais = "SELECT titulo, link, icone FROM redes_sociais";
                                $vrsExecutaRedesSociais = mysqli_query($Conexao, $vsSqlRedesSociais) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                                while ($voResultadoRedesSociais = mysqli_fetch_object($vrsExecutaRedesSociais)) {
                                    ?>
                                    <li><a href="<?php echo $voResultadoRedesSociais->link ?>" target="blank"><i title="<?php echo $voResultadoRedesSociais->titulo ?>" class="<?php echo $voResultadoRedesSociais->icone ?>" aria-hidden="true"></i></a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
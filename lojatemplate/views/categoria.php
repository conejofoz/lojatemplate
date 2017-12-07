<div id="page-wrapper">

    <div class="banner">
               

        <?php
        if ($categoria == "Perfumaria") {
            echo "<img src=" . BASE_URL . "/assets/images/mr-burberry.jpg />";
            echo "::";
        } else if ($categoria == "Casa") {
            echo "<img src=" . BASE_URL . "/assets/images/casa.jpg />";
            echo "::";
        } else if ($categoria == "Decoração") {
            echo "<img src=" . BASE_URL . "/assets/images/decoracao.jpg />";
            echo "::";
        } else if (substr($categoria, 0, 3) == "Rel") {
            echo "<img src=" . BASE_URL . "/assets/images/relogios.jpg />";
            echo "::";
        } else {
            echo "<img src=" . BASE_URL . "/assets/images/decoracao.jpg />";
            echo ":::";
        }

        ;
        ?>
    </div>
    <!-- pra tirar uma linha branca que ficava antes do banner -->
    <!--<div class="containerHome">-->
    <div class="row">
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title"><?php echo utf8_encode($categoria); ?></h3> 
                </div>
            </div>
        </div>

        <?php foreach ($produtos as $produto): ?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="white-box" style="height: 320px">

                    <a class="linkproduto" href="<?php echo BASE_URL; ?>/produto/ver/<?php echo $produto['id']; ?>">
                        <img src="<?php echo BASE_URL; ?>/assets/images/prods/<?php echo $produto['imagem']; ?>" width="200" height="200" border="0"/>
                        <div class="product-text">
                            <span class="pro-price bg-danger"><?php echo '$ ' . number_format($produto['preco'], 2, ',', '.'); ?></span><br/>
                            <h4 class="box-title m-b-0"><?php echo utf8_encode($produto['nome']); ?></h4>
                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>




</div>


<div class="banner">
    <img src="<?php echo BASE_URL; ?>/assets/images/azzaro-wanted.jpg" />
</div>
<div id="page-wrapper">
<div class="container-fluid">

    <?php foreach ($produtos as $produto): ?>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="white-box">
                <a class="linkproduto" href="<?php echo BASE_URL; ?>/produto/ver/<?php echo $produto['id']; ?>">
                    
                    <img src="<?php echo BASE_URL; ?>/assets/images/prods/<?php echo $produto['imagem']; ?>" width="150" height="200" border="0"/>
                        <div class="product-text">
                            <span class="pro-price bg-danger"><?php echo '$ ' . number_format($produto['preco'], 2, ',', '.'); ?></span>
                            <h3 class="box-title m-b-0"><?php echo utf8_encode($produto['nome']); ?><br/></h3>
                        
                        
                        </div>
                </a>
            </div>
        </div>
    <?php endforeach; ?>



</div>
</div>





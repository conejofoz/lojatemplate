<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="white-box" style="height: 320px">
                <img src="<?php echo BASE_URL; ?>/assets/images/prods/<?php echo $produto['imagem']; ?>" border="0" width="300" height="300" />
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="white-box" style="height: 320px">

                <h4 class="box-title m-b-0"><?php echo utf8_encode($produto['nome']); ?></h4>
                <?php echo utf8_encode($produto['descricao']); ?>
                <div class="product-text">
                    <br/>
                    <span class="pro-price bg-danger">$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></span>
                    <a href="<?php echo BASE_URL; ?>/carrinho/add/<?php echo $produto['id']; ?>" class="btn btn-inverse btn-rounded m-r-5" data-toggle="tooltip" title="Adicionar ao carrinho"><i class="ti-shopping-cart"></i> Comprar </a>

                </div>
            </div>
        </div>
        
    </div>
</div>
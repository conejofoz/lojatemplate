<div id="page-wrapper">
    <div class="row">
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">Carrinho de compras</h3> 
                </div>
            </div>
        </div>
<div class="white-box">
        <table class="table product-overview" border="0" width="100%">
            <tr>
                <th align="left">Imagem</th>
                <th align="left">Nome do produto</th>
                <th align="left">Valor</th>
                <th align="left">Ações</th>
            </tr>
            <?php $subtotal = 0; ?>
            <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td><img src="<?php echo BASE_URL; ?>/assets/images/prods/<?php echo $produto['imagem']; ?>" border="0" width="60" /></td>
                    <td><h5 class="font-500"><?php echo utf8_encode($produto['nome']); ?></h5></td>
                    <td><h5 class="font-500"><?php echo '$ ' . number_format($produto['preco'], 2, ',', '.'); ?></h5></td>
                    <td>
                        <a href="<?php echo BASE_URL; ?>/carrinho/del/<?php echo $produto['id']; ?>" class="text-inverse" title="Eliminar o produto do carrinho" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-lg fa-trash-o"></i></a> 
                    </td>
                </tr>
                <?php $subtotal += $produto['preco']; ?>
            <?php endforeach; ?>
            <tr>
                <td colspan="2" align="right"><h4 class="font-400">Sub-total:</h4></td>
                <td align="left"><h4 class="font-400">$ <?php echo number_format($subtotal, 2, ',', '.'); ?></h4></td>
                <td><a href="<?php echo BASE_URL; ?>/carrinho/finalizar" class="finalizarCompra">Finalizar Compra</a></td>
            </tr>

        </table>
        <br/>
    </div>
</div>
</div>

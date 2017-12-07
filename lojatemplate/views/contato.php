<div id="page-wrapper">

    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Contato</h3> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="white-box">
                <form method="POST" class="form-horizontal">
                    <?php if (!empty($msg)): ?>
                        <div class="aviso"><?php echo $msg; ?></div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label class="col-md-12">Nome</label>
                        <div class="col-md-12">
                            <input type="text" name="nome" class="form-control" required> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">E-mail</label>
                        <div class="col-md-12">
                            <input type="email" name="email" class="form-control" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">Mensagem</label>
                        <div class="col-md-12">
                            
                            <textarea name="mensagem" class="form-control"></textarea>
                        </div>
                    </div>



                   

                    <input type="submit" class="btn btn-success waves-effect waves-light m-r-10" value="Enviar mensagem" />

                </form>
            </div>
        </div>
    </div>
</div>

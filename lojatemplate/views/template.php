<html>
    <head>
        <title>Infinity Group S.A.</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo BASE_URL; ?>/assets/css/style.css" rel="stylesheet"/>
        <!--<link rel="stylesheet" href="<?php //echo BASE_URL; ?>/assets/css/font-awesome/css/font-awesome.min.css">-->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        
        <div class="container">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        </div>
        <?php include 'views/footer.php';?>
        
       
    </body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>member</title>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-theme.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <a class="navbar-brand" href="<?php echo Yii::app()->homeUrl; ?>"><?php echo CHtml::encode(Yii::app()->name); ?></a>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo Yii::app()->homeUrl; ?>">Dashboard</a></li>
                    <li><a href="#">Workspace</a></li>
                    <li><a href="#">Account Access</a></li>
                    <li><a href="#">Kevin Khan</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('site/login'); ?>">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php echo $content; ?>
    </div>

    <footer class="navbar-static-bottom">
        <div class="container">
            <p class="copy">Copyright <?=date('Y');?> © <?php echo CHtml::encode(Yii::app()->name); ?></p>
        </div>
    </footer>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>

</body>
</html>
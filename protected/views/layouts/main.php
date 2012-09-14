<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap-responsive.min.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

        <? Yii::app()->clientScript->registerCoreScript('jquery'); ?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body style="padding-top: 60px;">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="#"><?= CHtml::encode(Yii::app()->name) ?></a>
                    <div class="nav-collapse collapse">
                        <?php $this->widget('zii.widgets.CMenu',array(
                                  'items'=>array(
                                      array('label'=>'Home', 'url'=>array('/site/index')),
                                      array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                                      array('label'=>'Contact', 'url'=>array('/site/contact')),
                                      array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                      array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                                  ),
                                  'activeCssClass' => 'active',
                                  'htmlOptions'=>array('class'=>'nav'),
                        )); ?>
                    </div><!-- mainmenu -->
                </div>
            </div>
        </div>

        <?php echo $content; ?>

<!-- footer
	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div>
-->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
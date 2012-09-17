<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        <meta property="fb:admins" content="118487801536137"/>
	<!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap-responsive.min.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="/css/site.css" media="screen, projection" />
        <link rel="stylesheet" href="/chosen/chosen/chosen.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

        <? Yii::app()->clientScript->registerCoreScript('jquery'); ?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<?
	$url = Yii::app()->controller->getId() == 'site' ? '/images/layout_bg1.jpg' : '/images/layout_bg2.jpg'
?>
<body style="padding-top: 50px; background-image: url(<?=$url?>); background-repeat: no-repeat; background-size: 100%">
   <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
   <div id="fb-root"></div>
   <script>(function(d, s, id) {
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) return;
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
   </script>
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                    <div class="nav-collapse collapse">
                        <?php $this->widget('zii.widgets.CMenu',array(
                                  'items'=>array(
				      array('label'=>'Home', 'url'=>array('/site/index')), 
                                      array('label'=>'About', 'url'=>array('/site/about')),
                                      array('label'=>'Contact', 'url'=>array('/site/contact')),
                                      array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                      array('label'=>'Sign up', 'url'=>array('/designer/create'), 'visible'=>Yii::app()->user->isGuest),
                                      array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                                  ),
                                  'activeCssClass' => 'active',
                                  'htmlOptions'=>array('class'=>'nav'),
                        )); ?>
                    </div><!-- mainmenu -->
		    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://startup.cogini.com/site/index">Tweet</a>
                    <div style="margin: 10px 35px 0 0; float: right;" class="fb-like" data-send="true" data-layout="button_count" data-width="200" data-show-faces="false"></div>
            </div>
        </div>
        <?php echo $content; ?>
<!-- footer -->
        <? if ($this->menu) { ?>
        <div class="navbar navbar-inverse" style="bottom: 0; right: 0; background: white">
            <div class="navbar-inner">
                    <div class="nav-collapse collapse">
                        <?php $this->widget('zii.widgets.CMenu',array(
                                  'items'=>$this->menu,
                                  'htmlOptions'=>array('class'=>'nav'),
                        )); ?>
                    </div><!-- mainmenu -->
            </div>
        </div>
        <? } ?>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/chosen/chosen/chosen.jquery.js"></script>
<script>
   $(function(){
       $(".chzn-select").chosen();
   });
</script>

</body>
</html>
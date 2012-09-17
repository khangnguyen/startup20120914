<?php
$this->breadcrumbs=array(
	'Portfolio Photos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PortfolioPhoto', 'url'=>array('index')),
	array('label'=>'Manage PortfolioPhoto', 'url'=>array('admin')),
);
?>

<h1>Create PortfolioPhoto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
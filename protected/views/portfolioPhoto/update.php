<?php
$this->breadcrumbs=array(
	'Portfolio Photos'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PortfolioPhoto', 'url'=>array('index')),
	array('label'=>'Create PortfolioPhoto', 'url'=>array('create')),
	array('label'=>'View PortfolioPhoto', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PortfolioPhoto', 'url'=>array('admin')),
);
?>

<h1>Update PortfolioPhoto <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
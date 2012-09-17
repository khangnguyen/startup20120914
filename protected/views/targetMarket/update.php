<?php
$this->breadcrumbs=array(
	'Target Markets'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TargetMarket', 'url'=>array('index')),
	array('label'=>'Create TargetMarket', 'url'=>array('create')),
	array('label'=>'View TargetMarket', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TargetMarket', 'url'=>array('admin')),
);
?>

<h1>Update TargetMarket <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
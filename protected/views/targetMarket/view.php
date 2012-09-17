<?php
$this->breadcrumbs=array(
	'Target Markets'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TargetMarket', 'url'=>array('index')),
	array('label'=>'Create TargetMarket', 'url'=>array('create')),
	array('label'=>'Update TargetMarket', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TargetMarket', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TargetMarket', 'url'=>array('admin')),
);
?>

<h1>View TargetMarket #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>

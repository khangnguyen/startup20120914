<?php
$this->breadcrumbs=array(
	'Portfolio Photos'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List PortfolioPhoto', 'url'=>array('index')),
	array('label'=>'Create PortfolioPhoto', 'url'=>array('create')),
	array('label'=>'Update PortfolioPhoto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PortfolioPhoto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PortfolioPhoto', 'url'=>array('admin')),
);
?>

<h1>View PortfolioPhoto #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'portfolio_id',
		'description',
		'name',
	),
)); ?>

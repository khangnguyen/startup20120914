<?php
$this->breadcrumbs=array(
	'Target Markets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TargetMarket', 'url'=>array('index')),
	array('label'=>'Manage TargetMarket', 'url'=>array('admin')),
);
?>

<h1>Create TargetMarket</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
$this->breadcrumbs=array(
	'Designers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Designer', 'url'=>array('index')),
	array('label'=>'Create Designer', 'url'=>array('create')),
	array('label'=>'View Designer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Designer', 'url'=>array('admin')),
);
?>

<div class="content-no-site">
<h1>Update Designer <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
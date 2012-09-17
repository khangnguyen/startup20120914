<?php
$this->breadcrumbs=array(
	'Portfolios'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Portfolio', 'url'=>array('index')),
	array('label'=>'Create Portfolio', 'url'=>array('create')),
	array('label'=>'View Portfolio', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Portfolio', 'url'=>array('admin')),
);
?>
<div class="content-no-site">
<h1>Update Portfolio <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
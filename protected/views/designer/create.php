<?php
$this->breadcrumbs=array(
	'Designers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Designer', 'url'=>array('index')),
	array('label'=>'Manage Designer', 'url'=>array('admin')),
);
?>

<div class="content-no-site">
<h1>Create Designer</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
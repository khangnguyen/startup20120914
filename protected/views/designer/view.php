<?php
$this->breadcrumbs=array(
	'Designers'=>array('index'),
	$model->id,
);

if (!Yii::app()->user->isGuest and (Yii::app()->user->checkAccess('admin') or Yii::app()->user->_id == $model->id)) {

$this->menu=array(
	array('label'=>'New Portfolio', 'url'=>array('/portfolio/create', 'id'=>$model->id)),
	array('label'=>'Update Profile', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Profile', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);

 }
?>
<div style="margin: 20px auto; text-align: center;">
    <img src="<?=$model->image('bg_photo')?>" style="width: 100%"/>
</div>

<div style="width: 1000px" class="container"><div class="row">
<div class="span5" style="margin-left: 0; margin-top: 310px">
  <h3><?= $model->displayname; ?></h3>
  <table class="table">
    <tr>
      <td>Email</td>
      <td><?=$model->email?></td>
    </tr>
    <tr>
      <td>Education</td>
      <td><?= $model->education ?></td>
    </tr>
    <tr>
      <td>About me</td>
      <td><?= $model->bio ?></td>
    </tr>
  </table>
</div>
<div class="span8">
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'../portfolio/_view',
	'template'=>"{items}\n{pager}"
)); ?>
</div>
</div></div>
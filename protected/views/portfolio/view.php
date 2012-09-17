<?php
$this->breadcrumbs=array(
	'Portfolios'=>array('index'),
	$model->name,
);
if (!Yii::app()->user->isGuest and (Yii::app()->user->checkAccess('admin') or Yii::app()->user->_id == $model->id)) {
$this->menu=array(
	array('label'=>'Update Portfolio', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Portfolio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
 }
?>
<div style="width: 1200px; margin-bottom: 50px;" class="container">
<div class="span10" style="background: white; border: 1px solid black; padding: 20px;">
<h1 style="display: inline"><a href="/designer/view/id/<?=$model->designer->id?>"><?php echo $model->designer->displayname; ?></a></h1>
<h1 style="display: inline"> &raquo; <?php echo $model->name; ?></h1>
<br/>
<? if (!Yii::app()->user->isGuest and (Yii::app()->user->checkAccess('admin') or Yii::app()->user->_id == $model->id)) { ?>
  <input type="button" value="Add Photo" id="add_photo"/>
  <? $portfolioPhoto = new PortfolioPhoto;
     $portfolioPhoto->portfolio_id = $model->id;
  ?>
  <div class="pp-form" style="display: none;">
  <?= $this->renderPartial('../portfolioPhoto/_form', array('model'=>$portfolioPhoto, 'action'=>'/portfolioPhoto/create')); ?>
  </div>
<? } ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'../portfolioPhoto/_view',
	'template'=>"{items}\n{pager}"
)); ?>
<div class="fb-comments" data-href="http://spinningjennie.com" data-num-posts="2" data-width="780"></div>
</div>

<div class="span3" style="background: white; border: 1px solid black; padding: 20px; margin-bottom: 20px">
<h3>Description</h3>
<p><?=$model->description?></p>
</div>
<div class="span3" style="background: white; border: 1px solid black; padding: 40px 20px 20px; font-size: 18px">
<span style="font-size:3em; font-weight: bold">4</span>
<br/>pieces of 10 pieces goal
<br/><br/><br/>
  <a class="btn-success btn btn-large" href="" style="margin: 0 auto; width: 175px;">Make me one!</a>
<br/><br/><br/>
  <small>This project will be delivered if at least 10 pieces are made.<a href="/site/about">How we work.</a></small>
</div>
</div>
<script>
$(function(){
    $('#add_photo').click(function(){
        $(this).hide();
        $('.pp-form').show();
    });
});
</script>
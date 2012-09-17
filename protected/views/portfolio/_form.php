<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'portfolio-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
                <?
                  $markets = array();
                  foreach (TargetMarket::model()->findAll() as $market) {
		    $markets[$market->name] = $market->name;
                  }
                ?>
		<?php echo $form->labelEx($model,'target_market'); ?>
                <select multiple class="chzn-select" id ="Portfolio_target_market"
                        name="Portfolio[target_market][]"/>
                    <? foreach (TargetMarket::model()->findAll() as $market) { ?>
                        <option value="<?=$market->name?>"
									       <?= strpos($model->target_market, $market->name) !== false ? "selected='selected'" : '' ?>>
                          <?= $market->name?></option>
                    <? } ?>
                </select>
		<?php echo $form->error($model,'target_market'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
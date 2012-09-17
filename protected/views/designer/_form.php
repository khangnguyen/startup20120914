<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'designer-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'displayname'); ?>
		<?php echo $form->textField($model,'displayname',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'displayname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
        
        <? if ($model->isNewRecord) { ?>
	<div class="row">
	        <?php echo $form->labelEx($model,'password'); ?>
                <?php echo $form->passwordField($model,'password',array('autocomplete'=>'off','size'=>60,'maxlength'=>64)); ?>
	        <?php echo $form->error($model,'password'); ?>
	</div>

        <div class="row">
            <?= $form->labelEx($model,'password_repeat') ?>
            <?= $form->passwordField($model,'password_repeat',array('autocomplete'=>'off','size'=>30,'maxlength'=>60)) ?>
            <?= $form->error($model,'password_repeat') ?>
        </div>
        <? } ?>

	<div class="row">
		<?php echo $form->labelEx($model,'education'); ?>
		<?php echo $form->textField($model,'education',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'education'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bio'); ?>
		<?php echo $form->textArea($model,'bio',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'bio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link'); ?>
		<?php echo $form->textField($model,'link',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'link'); ?>
	</div>

        <? if (!$model->isNewRecord) { ?>
            <div class="row">
		<?php echo $form->labelEx($model,'layout'); ?>
		<?php echo $form->textField($model,'layout',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'layout'); ?>
            </div>
            <div class="row">
	      <?= $form->labelEx($model, 'cover_photo') ?>
	      <?= $model->imageChooserField('cover_photo') ?>
            </div>
            <div class="row">
	      <?= $form->labelEx($model, 'bg_photo') ?>
	      <?= $model->imageChooserField('bg_photo') ?>
            </div>
            <div class="row">
	      <?= $form->labelEx($model, 'avatar_photo') ?>
	      <?= $model->imageChooserField('avatar_photo') ?>
            </div>
        <? } ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
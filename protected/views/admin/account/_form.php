<?php
/* @var $this AccountController */
/* @var $model Account */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'account-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'card_type'); ?>
		<?php echo $form->textField($model,'card_type',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'card_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'card_no'); ?>
		<?php echo $form->textField($model,'card_no',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'card_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'card_owner'); ?>
		<?php echo $form->textField($model,'card_owner',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'card_owner'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CVC'); ?>
		<?php echo $form->textField($model,'CVC',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'CVC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_start'); ?>
		<?php echo $form->textField($model,'date_start'); ?>
		<?php echo $form->error($model,'date_start'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_end'); ?>
		<?php echo $form->textField($model,'date_end'); ?>
		<?php echo $form->error($model,'date_end'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
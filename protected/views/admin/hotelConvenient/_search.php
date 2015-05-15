<?php
/* @var $this HotelConvenientController */
/* @var $model HotelConvenient */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hotel_id'); ?>
		<?php echo $form->textField($model,'hotel_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'convenient_id'); ?>
		<?php echo $form->textField($model,'convenient_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
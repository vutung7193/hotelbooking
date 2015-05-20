<?php
/* @var $this RoomsController */
/* @var $model Rooms */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rooms-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hotel_id'); ?>
            
		<?php
                 $list = CHtml::listData(Hotels::model()->findAll(array('order' => 'name')),'id','name');
                echo CHtml::activeDropDownList( $model, 'hotel_id', $list,array('empty' => 'Select a Hotel'));
                
//                echo $form->textField($model,'hotel_id'); ?>
		<?php echo $form->error($model,'hotel_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purpose_id'); ?>
		<?php // echo $form->textField($model,'purpose_id');
                
                 $list = CHtml::listData(Purpose::model()->findAll(array('order' => 'name')),'id','name');
                echo CHtml::activeDropDownList( $model, 'purpose_id', $list,array('empty' => 'Select a Purpose'));?>
		<?php echo $form->error($model,'purpose_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'roomtype_id'); ?>
		<?php // echo $form->textField($model,'roomtype_id'); 
                 $list = CHtml::listData(Roomtype::model()->findAll(array('order' => 'name')),'id','name');
                echo CHtml::activeDropDownList( $model, 'roomtype_id', $list,array('empty' => 'Select a Roomtype'));?>
		<?php echo $form->error($model,'roomtype_id'); ?>
	</div>
     

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
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
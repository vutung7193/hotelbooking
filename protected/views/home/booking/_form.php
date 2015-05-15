<?php
/* @var $this BookingController */
/* @var $model Booking */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'booking-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>




	<div class="row">
		<?php echo $form->labelEx($model,'date_from'); ?>
		<?php // echo $form->textField($model,'date_from');
                               $this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'datepicker-month-year-menu',
      'model'=>$model,
                    'language' =>'vi',
'attribute'=>'date_from',
                 'value'=>$model->date_from,
//    'flat'=>true,//remove to hide the datepicker
    'options'=>array(
        'dateFormat' => 'yy-mm-dd',
        'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
        'changeMonth'=>true,
        'changeYear'=>true,
        'yearRange'=>'2000:2099',
        'minDate' => '2000-01-01',      // minimum date
        'maxDate' => '2099-12-31',      // maximum date
    ),
    'htmlOptions'=>array(
        'style'=>''
    ),
));?>
		<?php echo $form->error($model,'date_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_to'); ?>
		<?php // echo $form->textField($model,'date_to');
                               $this->widget('zii.widgets.jui.CJuiDatePicker',array(
//    'name'=>'datepicker-month-year-menu',
      'model'=>$model,
                    'language' =>'vi',
'attribute'=>'date_to',
                 'value'=>$model->date_to,
//    'flat'=>true,//remove to hide the datepicker
    'options'=>array(
        'dateFormat' => 'yy-mm-dd',
        'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
        'changeMonth'=>true,
        'changeYear'=>true,
        'yearRange'=>'2000:2099',
        'minDate' => '2000-01-01',      // minimum date
        'maxDate' => '2099-12-31',      // maximum date
    ),
    'htmlOptions'=>array(
        'style'=>''
    ),
));?>
		<?php echo $form->error($model,'date_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'person_no'); ?>
		<?php echo $form->textField($model,'person_no'); ?>
		<?php echo $form->error($model,'person_no'); ?>
	</div>



<div class="row">
<?php 
if(isset($_POST['dat']))
{
    $val = $_POST['room_id'];
//    echo $val;
                    echo $form->labelEx($model,'room_id');
		?>
    
    <input type="text" name="room_id" value="<?php echo $val?>">
    <?php
		 echo $form->error($model,'room_id');
    
    
}
?>
</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Book' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
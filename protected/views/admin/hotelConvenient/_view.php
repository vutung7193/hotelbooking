<?php
/* @var $this HotelConvenientController */
/* @var $data HotelConvenient */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hotel_id')); ?>:</b>
	<?php echo CHtml::encode($data->hotel_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('convenient_id')); ?>:</b>
	<?php echo CHtml::encode($data->convenient_id); ?>
	<br />


</div>
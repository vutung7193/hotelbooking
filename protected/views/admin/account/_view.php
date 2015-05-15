<?php
/* @var $this AccountController */
/* @var $data Account */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('card_type')); ?>:</b>
	<?php echo CHtml::encode($data->card_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('card_no')); ?>:</b>
	<?php echo CHtml::encode($data->card_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('card_owner')); ?>:</b>
	<?php echo CHtml::encode($data->card_owner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CVC')); ?>:</b>
	<?php echo CHtml::encode($data->CVC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_start')); ?>:</b>
	<?php echo CHtml::encode($data->date_start); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_end')); ?>:</b>
	<?php echo CHtml::encode($data->date_end); ?>
	<br />

	*/ ?>

</div>
<?php
/* @var $this BookingDetailController */
/* @var $model BookingDetail */

$this->breadcrumbs=array(
	'Booking Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BookingDetail', 'url'=>array('index')),
	array('label'=>'Manage BookingDetail', 'url'=>array('admin')),
);
?>

<h1>Create BookingDetail</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this BookingDetailController */
/* @var $model BookingDetail */

$this->breadcrumbs=array(
	'Booking Details'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List BookingDetail', 'url'=>array('index')),
	array('label'=>'Create BookingDetail', 'url'=>array('create')),
	array('label'=>'Update BookingDetail', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BookingDetail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BookingDetail', 'url'=>array('admin')),
);
?>

<h1>View BookingDetail #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'booking_id',
		'name',
		'phone',
		'email',
		'address',
		'service_id',
	),
)); ?>

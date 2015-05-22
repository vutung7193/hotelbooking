<?php
/* @var $this BookingDetailController */
/* @var $model BookingDetail */

$this->breadcrumbs=array(
	'Booking Details'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BookingDetail', 'url'=>array('index')),
	array('label'=>'Create BookingDetail', 'url'=>array('create')),
	array('label'=>'View BookingDetail', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BookingDetail', 'url'=>array('admin')),
);
?>

<h1>Update BookingDetail <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
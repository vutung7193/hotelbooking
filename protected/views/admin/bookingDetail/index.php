<?php
/* @var $this BookingDetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Booking Details',
);

$this->menu=array(
	array('label'=>'Create BookingDetail', 'url'=>array('create')),
	array('label'=>'Manage BookingDetail', 'url'=>array('admin')),
);
?>

<h1>Booking Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

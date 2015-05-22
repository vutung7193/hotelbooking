<?php
/* @var $this HotelServicesController */
/* @var $model HotelServices */

$this->breadcrumbs=array(
	'Hotel Services'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List HotelServices', 'url'=>array('index')),
	array('label'=>'Create HotelServices', 'url'=>array('create')),
	array('label'=>'Update HotelServices', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete HotelServices', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HotelServices', 'url'=>array('admin')),
);
?>

<h1>View HotelServices #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'hotel_id',
		'service_id',
		'price',
	),
)); ?>

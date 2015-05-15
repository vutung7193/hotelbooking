<?php
/* @var $this HotelConvenientController */
/* @var $model HotelConvenient */

$this->breadcrumbs=array(
	'Hotel Convenients'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List HotelConvenient', 'url'=>array('index')),
	array('label'=>'Create HotelConvenient', 'url'=>array('create')),
	array('label'=>'Update HotelConvenient', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete HotelConvenient', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HotelConvenient', 'url'=>array('admin')),
);
?>

<h1>View HotelConvenient #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'hotel_id',
		'convenient_id',
	),
)); ?>

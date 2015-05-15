<?php
/* @var $this RoomConvenientController */
/* @var $model RoomConvenient */

$this->breadcrumbs=array(
	'Room Convenients'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RoomConvenient', 'url'=>array('index')),
	array('label'=>'Create RoomConvenient', 'url'=>array('create')),
	array('label'=>'Update RoomConvenient', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RoomConvenient', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RoomConvenient', 'url'=>array('admin')),
);
?>

<h1>View RoomConvenient #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'room_id',
		'convenient_id',
	),
)); ?>

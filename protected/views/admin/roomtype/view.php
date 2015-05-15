<?php
/* @var $this RoomtypeController */
/* @var $model Roomtype */

$this->breadcrumbs=array(
	'Roomtypes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Roomtype', 'url'=>array('index')),
	array('label'=>'Create Roomtype', 'url'=>array('create')),
	array('label'=>'Update Roomtype', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Roomtype', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Roomtype', 'url'=>array('admin')),
);
?>

<h1>View Roomtype #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
	),
)); ?>

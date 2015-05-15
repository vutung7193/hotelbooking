<?php
/* @var $this RoomConvenientController */
/* @var $model RoomConvenient */

$this->breadcrumbs=array(
	'Room Convenients'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RoomConvenient', 'url'=>array('index')),
	array('label'=>'Create RoomConvenient', 'url'=>array('create')),
	array('label'=>'View RoomConvenient', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RoomConvenient', 'url'=>array('admin')),
);
?>

<h1>Update RoomConvenient <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this RoomConvenientController */
/* @var $model RoomConvenient */

$this->breadcrumbs=array(
	'Room Convenients'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RoomConvenient', 'url'=>array('index')),
	array('label'=>'Manage RoomConvenient', 'url'=>array('admin')),
);
?>

<h1>Create RoomConvenient</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
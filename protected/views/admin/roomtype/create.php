<?php
/* @var $this RoomtypeController */
/* @var $model Roomtype */

$this->breadcrumbs=array(
	'Roomtypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Roomtype', 'url'=>array('index')),
	array('label'=>'Manage Roomtype', 'url'=>array('admin')),
);
?>

<h1>Create Roomtype</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this RoomtypeController */
/* @var $model Roomtype */

$this->breadcrumbs=array(
	'Roomtypes'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Roomtype', 'url'=>array('index')),
	array('label'=>'Create Roomtype', 'url'=>array('create')),
	array('label'=>'View Roomtype', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Roomtype', 'url'=>array('admin')),
);
?>

<h1>Update Roomtype <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
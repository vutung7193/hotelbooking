<?php
/* @var $this ConvenientController */
/* @var $model Convenient */

$this->breadcrumbs=array(
	'Convenients'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Convenient', 'url'=>array('index')),
	array('label'=>'Create Convenient', 'url'=>array('create')),
	array('label'=>'Update Convenient', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Convenient', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Convenient', 'url'=>array('admin')),
);
?>

<h1>View Convenient #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>

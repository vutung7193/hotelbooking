<?php
/* @var $this HotelsController */
/* @var $model Hotels */

$this->breadcrumbs=array(
	'Hotels'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Hotels', 'url'=>array('index')),
	array('label'=>'Create Hotels', 'url'=>array('create')),
	array('label'=>'Update Hotels', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Hotels', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hotels', 'url'=>array('admin')),
);
?>

<h1>View Hotels #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'City',
		'address',
		'description',
		'rank',
		'total_cmt',
		'total_point',
		'aver_point',
	),
)); ?>

<?php
/* @var $this PurposeController */
/* @var $model Purpose */

$this->breadcrumbs=array(
	'Purposes'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Purpose', 'url'=>array('index')),
	array('label'=>'Create Purpose', 'url'=>array('create')),
	array('label'=>'View Purpose', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Purpose', 'url'=>array('admin')),
);
?>

<h1>Update Purpose <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
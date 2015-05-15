<?php
/* @var $this ConvenientController */
/* @var $model Convenient */

$this->breadcrumbs=array(
	'Convenients'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Convenient', 'url'=>array('index')),
	array('label'=>'Create Convenient', 'url'=>array('create')),
	array('label'=>'View Convenient', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Convenient', 'url'=>array('admin')),
);
?>

<h1>Update Convenient <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
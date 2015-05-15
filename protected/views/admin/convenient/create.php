<?php
/* @var $this ConvenientController */
/* @var $model Convenient */

$this->breadcrumbs=array(
	'Convenients'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Convenient', 'url'=>array('index')),
	array('label'=>'Manage Convenient', 'url'=>array('admin')),
);
?>

<h1>Create Convenient</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this HotelConvenientController */
/* @var $model HotelConvenient */

$this->breadcrumbs=array(
	'Hotel Convenients'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HotelConvenient', 'url'=>array('index')),
	array('label'=>'Manage HotelConvenient', 'url'=>array('admin')),
);
?>

<h1>Create HotelConvenient</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
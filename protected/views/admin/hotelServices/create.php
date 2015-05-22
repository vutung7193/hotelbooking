<?php
/* @var $this HotelServicesController */
/* @var $model HotelServices */

$this->breadcrumbs=array(
	'Hotel Services'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HotelServices', 'url'=>array('index')),
	array('label'=>'Manage HotelServices', 'url'=>array('admin')),
);
?>

<h1>Create HotelServices</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
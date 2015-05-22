<?php
/* @var $this HotelServicesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hotel Services',
);

$this->menu=array(
	array('label'=>'Create HotelServices', 'url'=>array('create')),
	array('label'=>'Manage HotelServices', 'url'=>array('admin')),
);
?>

<h1>Hotel Services</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

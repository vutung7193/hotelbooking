<?php
/* @var $this HotelConvenientController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hotel Convenients',
);

$this->menu=array(
	array('label'=>'Create HotelConvenient', 'url'=>array('create')),
	array('label'=>'Manage HotelConvenient', 'url'=>array('admin')),
);
?>

<h1>Hotel Convenients</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

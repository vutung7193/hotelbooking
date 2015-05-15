<?php
/* @var $this RoomtypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Roomtypes',
);

$this->menu=array(
	array('label'=>'Create Roomtype', 'url'=>array('create')),
	array('label'=>'Manage Roomtype', 'url'=>array('admin')),
);
?>

<h1>Roomtypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

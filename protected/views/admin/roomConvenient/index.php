<?php
/* @var $this RoomConvenientController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Room Convenients',
);

$this->menu=array(
	array('label'=>'Create RoomConvenient', 'url'=>array('create')),
	array('label'=>'Manage RoomConvenient', 'url'=>array('admin')),
);
?>

<h1>Room Convenients</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

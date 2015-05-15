<?php
/* @var $this ConvenientController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Convenients',
);

$this->menu=array(
	array('label'=>'Create Convenient', 'url'=>array('create')),
	array('label'=>'Manage Convenient', 'url'=>array('admin')),
);
?>

<h1>Convenients</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

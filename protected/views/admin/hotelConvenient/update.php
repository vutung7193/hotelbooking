<?php
/* @var $this HotelConvenientController */
/* @var $model HotelConvenient */

$this->breadcrumbs=array(
	'Hotel Convenients'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List HotelConvenient', 'url'=>array('index')),
	array('label'=>'Create HotelConvenient', 'url'=>array('create')),
	array('label'=>'View HotelConvenient', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage HotelConvenient', 'url'=>array('admin')),
);
?>

<h1>Update HotelConvenient <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this HotelServicesController */
/* @var $model HotelServices */

$this->breadcrumbs=array(
	'Hotel Services'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List HotelServices', 'url'=>array('index')),
	array('label'=>'Create HotelServices', 'url'=>array('create')),
	array('label'=>'View HotelServices', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage HotelServices', 'url'=>array('admin')),
);
?>

<h1>Update HotelServices <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
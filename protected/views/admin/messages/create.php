<?php
/* @var $this MessagesController */
/* @var $model Messages */

$this->breadcrumbs=array(
	'Messages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Messages', 'url'=>array('index')),
	array('label'=>'Manage Messages', 'url'=>array('admin')),
);
?>

<h1>Create Messages</h1>

<form method ="post">
    <input type="submit" name="send" value="send">
</form>
<?php // $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this AccountController */
/* @var $model Account */

$this->breadcrumbs=array(
	'Accounts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Account', 'url'=>array('index')),
	array('label'=>'Manage Account', 'url'=>array('admin')),
);
?>

<h1>Create Merchant Account</h1>

<?php echo $this->renderPartial('_merchantForm', array('model'=>$model)); ?>
<?php
$this->breadcrumbs=array(
	'Customers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List customer', 'url'=>array('index')),
	array('label'=>'Manage customer', 'url'=>array('admin')),
);
?>

<h1>Create customer</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
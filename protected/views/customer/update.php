<?php
$this->breadcrumbs=array(
	'Customers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List customer', 'url'=>array('index')),
	array('label'=>'Create customer', 'url'=>array('create')),
	array('label'=>'View customer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage customer', 'url'=>array('admin')),
);
?>

<h1>Update customer <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
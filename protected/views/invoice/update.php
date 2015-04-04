<?php
$this->breadcrumbs=array(
	'Invoices'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List invoice', 'url'=>array('index')),
	array('label'=>'Create invoice', 'url'=>array('create')),
	array('label'=>'View invoice', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage invoice', 'url'=>array('admin')),
);
?>

<h1>Update invoice <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
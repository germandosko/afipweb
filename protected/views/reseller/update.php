<?php
$this->breadcrumbs=array(
	'Resellers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List reseller', 'url'=>array('index')),
	array('label'=>'Create reseller', 'url'=>array('create')),
	array('label'=>'View reseller', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage reseller', 'url'=>array('admin')),
);
?>

<h1>Update reseller <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
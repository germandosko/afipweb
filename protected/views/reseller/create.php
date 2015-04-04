<?php
$this->breadcrumbs=array(
	'Resellers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List reseller', 'url'=>array('index')),
	array('label'=>'Manage reseller', 'url'=>array('admin')),
);
?>

<h1>Create reseller</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
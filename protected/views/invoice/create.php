<?php
$this->breadcrumbs=array(
	'Invoices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List invoice', 'url'=>array('index')),
	array('label'=>'Manage invoice', 'url'=>array('admin')),
);
?>

<h1>Create invoice</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
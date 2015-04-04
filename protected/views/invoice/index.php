<?php
$this->breadcrumbs=array(
	'Invoices',
);

$this->menu=array(
	array('label'=>'Create invoice', 'url'=>array('create')),
	array('label'=>'Manage invoice', 'url'=>array('admin')),
);
?>

<h1>Invoices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

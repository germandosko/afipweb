<?php
$this->breadcrumbs=array(
	'Resellers',
);

$this->menu=array(
	array('label'=>'Create reseller', 'url'=>array('create')),
	array('label'=>'Manage reseller', 'url'=>array('admin')),
);
?>

<h1>Resellers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

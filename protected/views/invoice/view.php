<?php
$this->breadcrumbs=array(
	'Invoices'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List invoice', 'url'=>array('index')),
	array('label'=>'Create invoice', 'url'=>array('create')),
	array('label'=>'Update invoice', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete invoice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage invoice', 'url'=>array('admin')),
);
?>

<h1>View invoice #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type',
		'amount',
		'from_number',
		'to_number',
		'sale_point',
		'cai',
		'last_valid_date',
		'information',
		'customer_id',
	),
)); ?>

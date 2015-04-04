<?php
$this->breadcrumbs=array(
	'Customers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List customer', 'url'=>array('index')),
	array('label'=>'Create customer', 'url'=>array('create')),
	array('label'=>'Update customer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete customer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage customer', 'url'=>array('admin')),
);
?>

<h1>View customer #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cuit',
		'api_code',
		'init_date',
		'name',
		'last_name',
		'phone',
		'cellphone',
		'address',
		'city',
		'email',
		'responsible_type',
		'cpa',
		'reseller_id',
	),
)); ?>

<?php
$this->breadcrumbs=array(
	'Resellers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List reseller', 'url'=>array('index')),
	array('label'=>'Create reseller', 'url'=>array('create')),
	array('label'=>'Update reseller', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete reseller', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage reseller', 'url'=>array('admin')),
);
?>

<h1>View reseller #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'last_name',
		'phone',
		'cellphone',
		'address',
		'city',
		'email',
		'username',
		'password',
	),
)); ?>

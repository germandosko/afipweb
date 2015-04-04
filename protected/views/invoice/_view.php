<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('from_number')); ?>:</b>
	<?php echo CHtml::encode($data->from_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('to_number')); ?>:</b>
	<?php echo CHtml::encode($data->to_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sale_point')); ?>:</b>
	<?php echo CHtml::encode($data->sale_point); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cai')); ?>:</b>
	<?php echo CHtml::encode($data->cai); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('last_valid_date')); ?>:</b>
	<?php echo CHtml::encode($data->last_valid_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('information')); ?>:</b>
	<?php echo CHtml::encode($data->information); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_id')); ?>:</b>
	<?php echo CHtml::encode($data->customer_id); ?>
	<br />

	*/ ?>

</div>
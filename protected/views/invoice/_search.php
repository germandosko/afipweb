<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amount'); ?>
		<?php echo $form->textField($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'from_number'); ?>
		<?php echo $form->textField($model,'from_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'to_number'); ?>
		<?php echo $form->textField($model,'to_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sale_point'); ?>
		<?php echo $form->textField($model,'sale_point'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cai'); ?>
		<?php echo $form->textField($model,'cai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_valid_date'); ?>
		<?php echo $form->textField($model,'last_valid_date',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'information'); ?>
		<?php echo $form->textField($model,'information',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customer_id'); ?>
		<?php echo $form->textField($model,'customer_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
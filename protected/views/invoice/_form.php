<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'invoice-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount'); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'from_number'); ?>
		<?php echo $form->textField($model,'from_number'); ?>
		<?php echo $form->error($model,'from_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'to_number'); ?>
		<?php echo $form->textField($model,'to_number'); ?>
		<?php echo $form->error($model,'to_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sale_point'); ?>
		<?php echo $form->textField($model,'sale_point'); ?>
		<?php echo $form->error($model,'sale_point'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cai'); ?>
		<?php echo $form->textField($model,'cai'); ?>
		<?php echo $form->error($model,'cai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_valid_date'); ?>
		<?php echo $form->textField($model,'last_valid_date',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'last_valid_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'information'); ?>
		<?php echo $form->textField($model,'information',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'information'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_id'); ?>
		<?php echo $form->textField($model,'customer_id'); ?>
		<?php echo $form->error($model,'customer_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
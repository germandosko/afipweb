<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cuit'); ?>
		<?php echo $form->textField($model,'cuit'); ?>
		<?php echo $form->error($model,'cuit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'api_code'); ?>
		<?php echo $form->textField($model,'api_code'); ?>
		<?php echo $form->error($model,'api_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'init_date'); ?>
		<?php echo $form->textField($model,'init_date',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'init_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cellphone'); ?>
		<?php echo $form->textField($model,'cellphone',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'cellphone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'responsible_type'); ?>
		<?php echo $form->textField($model,'responsible_type',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'responsible_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpa'); ?>
		<?php echo $form->textField($model,'cpa'); ?>
		<?php echo $form->error($model,'cpa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reseller_id'); ?>
		<?php echo $form->textField($model,'reseller_id'); ?>
		<?php echo $form->error($model,'reseller_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
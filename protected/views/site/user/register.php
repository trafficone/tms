<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-register-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_pass'); ?>
		<?php echo $form->textField($model,'user_pass'); ?>
		<?php echo $form->error($model,'user_pass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_created_timestamp'); ?>
		<?php echo $form->textField($model,'user_created_timestamp'); ?>
		<?php echo $form->error($model,'user_created_timestamp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_alias'); ?>
		<?php echo $form->textField($model,'user_alias'); ?>
		<?php echo $form->error($model,'user_alias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_verified'); ?>
		<?php echo $form->textField($model,'user_verified'); ?>
		<?php echo $form->error($model,'user_verified'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'article-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<?php /*
	//<!-- this field is automatically populated --> 
	<div class="row">
		<?php echo $form->labelEx($model,'article_timestamp'); ?>
		<?php echo $form->textField($model,'article_timestamp'); ?>
		<?php echo $form->error($model,'article_timestamp'); ?>
	</div>
	*. ?>
	<div class="row">
		<?php echo $form->labelEx($model,'article_edited_timestamp'); ?>
		<?php echo $form->textField($model,'article_edited_timestamp'); ?>
		<?php echo $form->error($model,'article_edited_timestamp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'article_user_id'); ?>
		<?php echo $form->textField($model,'article_user_id'); ?>
		<?php echo $form->error($model,'article_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'article_content'); ?>
		<?php echo $form->textField($model,'article_content',array('size'=>60,'maxlength'=>10000)); ?>
		<?php echo $form->error($model,'article_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'article_links'); ?>
		<?php echo $form->textField($model,'article_links',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'article_links'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'article_tags'); ?>
		<?php echo $form->textField($model,'article_tags',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'article_tags'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

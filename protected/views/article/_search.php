<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'article_id'); ?>
		<?php echo $form->textField($model,'article_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'article_timestamp'); ?>
		<?php echo $form->textField($model,'article_timestamp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'article_edited_timestamp'); ?>
		<?php echo $form->textField($model,'article_edited_timestamp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'article_user_id'); ?>
		<?php echo $form->textField($model,'article_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'article_content'); ?>
		<?php echo $form->textField($model,'article_content',array('size'=>60,'maxlength'=>10000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'article_links'); ?>
		<?php echo $form->textField($model,'article_links',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'article_tags'); ?>
		<?php echo $form->textField($model,'article_tags',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
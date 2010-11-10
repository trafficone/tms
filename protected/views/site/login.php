<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>
<p>Please fill out the following form with your login credentials:</p>
<script src="/scripts/md5hash.js">
</script>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableAjaxValidation'=>false,
	'clientOptions'=>'beforeValidate'
)); ?>

	<p class="note">Fields <span class="required"></span>required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login'); ?>
                <a href="<?php echo $this->createUrl('user/new');?>">New?</a>
	</div>
<script language='javascript'>
 var beforeValidate=function(form){
	 document.login-form.password = $.md5("rocksalt"+document.login-form.password);
   return true;
 }
</script>
<?php $this->endWidget(); ?>
</div><!-- form -->

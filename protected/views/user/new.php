<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-register-form',
	'enableAjaxValidation'=>false,
  //'onsubmit'=>'document.login-form.password = rstr_md5(\"rocksalt\"+document.login-form.password);'
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'user_pass'); ?>
		<?php echo $form->textField($model,'user_pass'); ?>
		<?php echo $form->error($model,'user_pass'); ?>
	</div>
	
	<div class="row">
	  <label>Verify password</label>
		<input type='text' name='pass_verify' />
		
	</div>

  <?php if(extension_loaded('gd')): ?>
	<div class="row">
		<label for="verifyCode">Are you Human?</label>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<input type='text' id='verifyCode' name='verifyCode' />
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<button id="submit">Submit</button>
	</div>
<script language="Javascript">
 $(document).ready(function() {
   $("#submit").button();
   
 }
</script>
<?php $this->endWidget(); ?>

</div><!-- form -->
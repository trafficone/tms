<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('article_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->article_id), array('view', 'id'=>$data->article_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('article_timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->article_timestamp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('article_edited_timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->article_edited_timestamp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('article_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->article_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('article_content')); ?>:</b>
	<?php echo CHtml::encode($data->article_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('article_links')); ?>:</b>
	<?php echo CHtml::encode($data->article_links); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('article_tags')); ?>:</b>
	<?php echo CHtml::encode($data->article_tags); ?>
	<br />


</div>
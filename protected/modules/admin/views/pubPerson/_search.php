<div class="panel close collapse" defH="100">
<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Id'); ?>
		<?php echo $form->textField($model,'Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IdNumber'); ?>
		<?php echo $form->textField($model,'IdNumber',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sex'); ?>
		<?php echo $form->textField($model,'Sex',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nation'); ?>
		<?php echo $form->textField($model,'Nation',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Address'); ?>
		<?php echo $form->textField($model,'Address',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Country'); ?>
		<?php echo $form->textField($model,'Country',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AllowEdit'); ?>
		<?php echo $form->textField($model,'AllowEdit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AllowDel'); ?>
		<?php echo $form->textField($model,'AllowDel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SortCode'); ?>
		<?php echo $form->textField($model,'SortCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DeletionFlag'); ?>
		<?php echo $form->textField($model,'DeletionFlag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EnabledFlag'); ?>
		<?php echo $form->textField($model,'EnabledFlag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CreateOn'); ?>
		<?php echo $form->textField($model,'CreateOn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CreateBy'); ?>
		<?php echo $form->textField($model,'CreateBy',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CreateUserId'); ?>
		<?php echo $form->textField($model,'CreateUserId',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Description'); ?>
		<?php echo $form->textField($model,'Description',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('搜索'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
</div>
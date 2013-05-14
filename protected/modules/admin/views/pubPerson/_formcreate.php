<?php
/* @var $this PubPersonController */
/* @var $model PubPerson */
/* @var $form CActiveForm */
?>

<div class="pageContent">

<?php $form=$this->beginWidget('ext.dwz.DwzActiveForm', array(
	'id'=>'pub-person-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array(
	    'class'=>'pageForm required-validate',
	    'onsubmit'=>'return iframeCallback(this,dialogAjaxDone)',
	)
)); ?>
    <div class="pageFormContent" layoutH="58">
	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<?php echo $form->errorSummary($model); ?>

	<div class="unit">
		<?php echo $form->labelEx($model,'Id'); ?>
		<?php echo $form->textField($model,'Id'); ?>
		<?php echo $form->error($model,'Id'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'IdNumber'); ?>
		<?php echo $form->textField($model,'IdNumber',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'IdNumber'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'Name'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'Sex'); ?>
		<?php echo $form->textField($model,'Sex',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'Sex'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'Nation'); ?>
		<?php echo $form->textField($model,'Nation',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'Nation'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'Address'); ?>
		<?php echo $form->textField($model,'Address',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'Address'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'Country'); ?>
		<?php echo $form->textField($model,'Country',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'Country'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'AllowEdit'); ?>
		<?php echo $form->textField($model,'AllowEdit'); ?>
		<?php echo $form->error($model,'AllowEdit'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'AllowDel'); ?>
		<?php echo $form->textField($model,'AllowDel'); ?>
		<?php echo $form->error($model,'AllowDel'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'SortCode'); ?>
		<?php echo $form->textField($model,'SortCode'); ?>
		<?php echo $form->error($model,'SortCode'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'DeletionFlag'); ?>
		<?php echo $form->textField($model,'DeletionFlag'); ?>
		<?php echo $form->error($model,'DeletionFlag'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'EnabledFlag'); ?>
		<?php echo $form->textField($model,'EnabledFlag'); ?>
		<?php echo $form->error($model,'EnabledFlag'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'CreateOn'); ?>
		<?php echo $form->textField($model,'CreateOn'); ?>
		<?php echo $form->error($model,'CreateOn'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'CreateBy'); ?>
		<?php echo $form->textField($model,'CreateBy',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'CreateBy'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'CreateUserId'); ?>
		<?php echo $form->textField($model,'CreateUserId',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'CreateUserId'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'Description'); ?>
		<?php echo $form->textField($model,'Description',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Description'); ?>
	</div>

    </div>
	<div class="formBar">
        <ul>
            <li>
                <div class="buttonActive">
                    <div class="buttonContent">
                        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
                    </div>
                </div>
            </li>
            <li>
                <div class="button">
                    <div class="buttonContent">
                        <button type="button" class="close">取消</button>
                    </div>
                </div>
            </li>
        </ul>

	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view','id'=>$data->Id),array('target'=>'dialog')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdNumber')); ?>:</b>
	<?php echo CHtml::encode($data->IdNumber); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('Sex')); ?>:</b>
	<?php echo CHtml::encode($data->Sex); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('Nation')); ?>:</b>
	<?php echo CHtml::encode($data->Nation); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('Address')); ?>:</b>
	<?php echo CHtml::encode($data->Address); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('Country')); ?>:</b>
	<?php echo CHtml::encode($data->Country); ?>
	<br />
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('AllowEdit')); ?>:</b>
	<?php echo CHtml::encode($data->AllowEdit); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('AllowDel')); ?>:</b>
	<?php echo CHtml::encode($data->AllowDel); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('SortCode')); ?>:</b>
	<?php echo CHtml::encode($data->SortCode); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('DeletionFlag')); ?>:</b>
	<?php echo CHtml::encode($data->DeletionFlag); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('EnabledFlag')); ?>:</b>
	<?php echo CHtml::encode($data->EnabledFlag); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('CreateOn')); ?>:</b>
	<?php echo CHtml::encode($data->CreateOn); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('CreateBy')); ?>:</b>
	<?php echo CHtml::encode($data->CreateBy); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('CreateUserId')); ?>:</b>
	<?php echo CHtml::encode($data->CreateUserId); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->Description); ?>
	<br />
	*/ ?>
</div>
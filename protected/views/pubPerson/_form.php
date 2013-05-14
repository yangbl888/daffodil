<?php echo CHtml::beginForm('', 'POST', array(
	'class'=>'pageForm required-validate',
	'onsubmit'=>'return iframeCallback(this,dialogAjaxDone)',
	'enctype'=>'multipart/form-data'))?>
<script type="text/javascript">
/*<![CDATA[*/
	function pub-person_form(form){
		<?php echo $_REQUEST['target']=='navTab'? 'navTab': '$.pdialog';?>.reload(form.action, $(form).serializeArray());
		return false;
	}
/*]]>*/
</script>
<style>.alert .alertInner .msg{max-height:600px;overflow:visible;}</style>
	<div class="form pageFormContent" layoutH="55">
		<?php echo CHtml::errorSummary($model); ?>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'lD_Number'); ?>
			<?php echo CHtml::ActiveTextField($model,'lD_Number'); ?>
			<?php echo CHtml::error($model,'lD_Number'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'Name'); ?>
			<?php echo CHtml::ActiveTextField($model,'Name'); ?>
			<?php echo CHtml::error($model,'Name'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'Sex'); ?>
			<?php echo CHtml::ActiveTextField($model,'Sex'); ?>
			<?php echo CHtml::error($model,'Sex'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'Nation'); ?>
			<?php echo CHtml::ActiveTextField($model,'Nation'); ?>
			<?php echo CHtml::error($model,'Nation'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'Address'); ?>
			<?php echo CHtml::ActiveTextField($model,'Address'); ?>
			<?php echo CHtml::error($model,'Address'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'Country'); ?>
			<?php echo CHtml::ActiveTextField($model,'Country'); ?>
			<?php echo CHtml::error($model,'Country'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'AllowEdit'); ?>
			<?php echo CHtml::ActiveTextField($model,'AllowEdit'); ?>
			<?php echo CHtml::error($model,'AllowEdit'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'AllowDel'); ?>
			<?php echo CHtml::ActiveTextField($model,'AllowDel'); ?>
			<?php echo CHtml::error($model,'AllowDel'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'SortCode'); ?>
			<?php echo CHtml::ActiveTextField($model,'SortCode'); ?>
			<?php echo CHtml::error($model,'SortCode'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'DeletionFlag'); ?>
			<?php echo CHtml::ActiveTextField($model,'DeletionFlag'); ?>
			<?php echo CHtml::error($model,'DeletionFlag'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'EnabledFlag'); ?>
			<?php echo CHtml::ActiveTextField($model,'EnabledFlag'); ?>
			<?php echo CHtml::error($model,'EnabledFlag'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'CreateOn'); ?>
			<?php echo CHtml::ActiveTextField($model,'CreateOn'); ?>
			<?php echo CHtml::error($model,'CreateOn'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'CreateBy'); ?>
			<?php echo CHtml::ActiveTextField($model,'CreateBy'); ?>
			<?php echo CHtml::error($model,'CreateBy'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'CreateUserId'); ?>
			<?php echo CHtml::ActiveTextField($model,'CreateUserId'); ?>
			<?php echo CHtml::error($model,'CreateUserId'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'Description'); ?>
			<?php echo CHtml::ActiveTextField($model,'Description'); ?>
			<?php echo CHtml::error($model,'Description'); ?>
		</div>

			</div>
	<div class="formBar">
		<ul>
			<li><div class="buttonActive"><div class="buttonContent">
				<button type="submit"><?php echo $model->isNewRecord ? '创建' : '保存'; ?>
</button>
			</div></div></li>
			<li>
				<div class="button"><div class="buttonContent">
					<button onclick="<?php echo $_REQUEST['target']=='navTab'? 'navTab.closeCurrentTab()': '$.pdialog.closeCurrent()';?>" type="Button">取消</button>
				</div></div>
			</li>
		</ul>
	</div>
<?php echo CHtml::endForm() ?>
</div>
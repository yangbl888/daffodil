<?php echo CHtml::beginForm('', 'POST', array(
	'class'=>'pageForm required-validate',
	'onsubmit'=>'return iframeCallback(this,dialogAjaxDone)',
	'enctype'=>'multipart/form-data'))?>
<script type="text/javascript">
/*<![CDATA[*/
	function rbac-user_form(form){
		<?php echo $_REQUEST['target']=='navTab'? 'navTab': '$.pdialog';?>.reload(form.action, $(form).serializeArray());
		return false;
	}
/*]]>*/
</script>
<style>.alert .alertInner .msg{max-height:600px;overflow:visible;}</style>
	<div class="form pageFormContent" layoutH="55">
		<?php echo CHtml::errorSummary($model); ?>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'UserId'); ?>
			<?php echo CHtml::ActiveTextField($model,'UserId'); ?>
			<?php echo CHtml::error($model,'UserId'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'Alias'); ?>
			<?php echo CHtml::ActiveTextField($model,'Alias'); ?>
			<?php echo CHtml::error($model,'Alias'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'Name'); ?>
			<?php echo CHtml::ActiveTextField($model,'Name'); ?>
			<?php echo CHtml::error($model,'Name'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'IdNumber'); ?>
			<?php echo CHtml::ActiveTextField($model,'IdNumber'); ?>
			<?php echo CHtml::error($model,'IdNumber'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'Password'); ?>
			<?php echo CHtml::ActiveTextField($model,'Password'); ?>
			<?php echo CHtml::error($model,'Password'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'CreateOn'); ?>
			<?php echo CHtml::ActiveTextField($model,'CreateOn'); ?>
			<?php echo CHtml::error($model,'CreateOn'); ?>
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
<div class="page">
	<div class="pageHeader">
		<?php
$this->breadcrumbs=array(
				'Rbac Users'=>array('index'),
				$model->Name,
			);
		?>
		<h1>查看RbacUser表的 #<?php echo $model->Id; ?> 记录</h1>
	</div>
	<div class="pageContent" layoutH="28">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'cssFile'=>'/css/detailview/styles.css',
			'attributes'=>array(
				'Id',
		'UserId',
		'Alias',
		'Name',
		'IdNumber',
		'Password',
		'CreateOn',
		'Description',
			),
		)); ?>
	</div>
</div>
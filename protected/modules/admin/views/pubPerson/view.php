<div class="page">
	<div class="pageHeader">
		<?php
$this->breadcrumbs=array(
				'Pub People'=>array('index'),
				$model->Name,
			);
		?>
		<h1>查看PubPerson表的 #<?php echo $model->Id; ?> 记录</h1>
	</div>
	<div class="pageContent" layoutH="28">
		<?php $this->widget('ext.dwz.DwzDetailView' /*'zii.widgets.CDetailView'*/, array(
			'data'=>$model,
			//'cssFile'=>'/css/detailview/styles.css',
			'attributes'=>array(
				'Id',
		'IdNumber',
		'Name',
		'Sex',
		'Nation',
		'Address',
		'Country',
		'AllowEdit',
		'AllowDel',
		'SortCode',
		'DeletionFlag',
		'EnabledFlag',
		'CreateOn',
		'CreateBy',
		'CreateUserId',
		'Description',
			),
		)); ?>
	</div>
</div>
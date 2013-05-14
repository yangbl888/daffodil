	<?php $this->widget('ext.dwz.DwzGridView', array(
		'id'=>'rbac-user-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		//'cssFile'=>'/css/gridview/styles.css',
		'columns'=>array(
			'Id',
		'UserId',
		'Alias',
		'Name',
		'IdNumber',
		'Password',
		/*
		'CreateOn',
		'Description',
		*/
			array(
				'class'=>'CButtonColumn',
			),
		),
	)); ?>
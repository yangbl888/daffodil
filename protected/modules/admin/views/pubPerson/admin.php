<div class="pageHeader">
	<form onsubmit="return navTabSearch(this);" action="demo_page1.html" method="post">
	<div class="searchBar">
		<!--<ul class="searchContent">
			<li>
				<label>我的客户：</label>
				<input type="text"/>
			</li>
			<li>
			<select class="combox" name="province">
				<option value="">所有省市</option>
				<option value="北京">北京</option>
				<option value="上海">上海</option>
				<option value="天津">天津</option>
				<option value="重庆">重庆</option>
				<option value="广东">广东</option>
			</select>
			</li>
		</ul>
		-->
		<table class="searchContent">
			<tr>
				<td>
					我的客户：<input type="text" name="keyword" />
				</td>
				<td>
					<select class="combox" name="province">
						<option value="">所有省市</option>
						<option value="北京">北京</option>
						<option value="上海">上海</option>
						<option value="天津">天津</option>
						<option value="重庆">重庆</option>
						<option value="广东">广东</option>
					</select>
				</td>
				<td>
					建档日期：<input type="text" class="date" readonly="true" />
				</td>
			</tr>
		</table>
		<div class="subBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></li>
				<li><a class="button" href="demo_page6.html" target="dialog" mask="true" title="查询框"><span>高级检索</span></a></li>
			</ul>
		</div>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="index.php?r=admin/pubperson/create" target="navTab"><span>添加</span></a></li>
			<li><a class="delete" href="index.php?r=admin/pubperson/delete&id={sid_user}" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a class="edit" href="index.php?r=admin/pubperson/update&id={sid_user}" target="dialog"><span>修改</span></a></li>
			<li class="line">line</li>
			<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>
		</ul>
	</div>
<?php $this->widget('ext.dwz.DwzGridView', array(
		'id'=>'pub-person-grid',
		'dataProvider'=>$model->search(),
	     //	'filter'=>$model,
		//'cssFile'=>'/css/gridview/styles.css',
		'columns'=>array(
                 array(  
                    'header'=>'编号',  
                  //  'type'=>'raw',  
                     'name'=>'Id',
                    ),  
                 array(  
                    'header'=>'身份证号',                     
                     'name'=>'IdNumber',
                    ),  
 /* 
                 array(  
                    'header'=>'姓名',                     
                     'name'=>'Name',
                    ),  
               array(  
                    'header'=>'性别',                     
                     'name'=>'Sex',
                    ),  
             */
	//	'Nation',
	//	'Address',                      
			array(
                                'header'=>'操作',    
				'class'=>'ext.dwz.DwzButtonColumn',
			),         
                    ),
             'linkType'=>array('target'=>'navTab','rel'=>'art_manager','title'=>'人员管理'),  //定义DwzGridView翻页不出navTab
)); ?>
</div>
<?php
/**
 * DwzGridView class file.
 * 在CGridView的基础上把翻页栏固定住了，方便翻页，其他均和CGridView相同。使用方法参数均与CGridView相同.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link http://www.yiiframework.com/
 * @copyright Copyright &copy; 2008-2010 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
Yii::import('zii.widgets.grid.CGridView');
/**
 * 纠正pageVar
 */


/**
 * 原始的yii js源码必须修改 不然会出错的 主要是关闭再次打开admin视图时在点击表头排序
 * 和filter里面输入过滤词 ajax加载时就会多次加载
 * -------------------------------------------------------
 *...  修改的地方 是位于【gridSettings[id] = settings;】之下的

gridSettings[id] = settings;

//====================================================================

// 修改的地方：<< begin
if(typeof parent.gridIds === "undefined"){
parent.gridIds = [];
}
if(jQuery.inArray(id,  parent.gridIds) !== -1){
// alert("已经实例化了");
settings = parent.gridSettings[id];
return ;
}else{
parent.gridIds.push(id);
if(typeof parent.gridSettings === "undefined"){
parent.gridSettings = [];
}
parent.gridSettings[id] = settings ;
// alert("没有啊");
}

// 修改的地方： end >>
//====================================================================
 * -------------------------------------------------------
 */
class DwzGridView extends CGridView
{

    //  public $filterPosition='footer';
    // public $pager=array('class'=>'ext.dwz.DwzPager');

    // public $hideHeader = true;
    /**
     * @var array
     */
    public $tableHtmlOptions = array();

    /**
     * @var string
     */
    public $afterAjaxUpdate = 'fixUI';
    public $template="{items}{summary}{pager}";
    public $mysummary=''; 
    /*
     * 适用于在dwz中指定navTab
     * 
     */
    public $linkType=array();
    
    public function init()
    {
        $assetsPath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
        if (YII_DEBUG) {
            $assetsUrl = Yii::app()->assetManager->publish($assetsPath, false, -1, true);
        } else {
            $assetsUrl = Yii::app()->assetManager->publish($assetsPath);
        }
        $this->baseScriptUrl = $assetsUrl . '/gridview';
        parent::init();
        $dp = $this->dataProvider;
        $pageVar = $dp->pagination->pageVar;
        if (isset($_POST['pageNum'])) {
            $_GET[$pageVar] = $_POST['pageNum'] ;
        }

    }
/**
	 * Renders a table body row.
	 * @param integer the row number (zero-based).
       * 添加覆写方法，以便在tr中添加target和rel属性，方法选择行  ----太阳浴血
	 */
    public function renderTableRow($row)
	{
		if($this->rowCssClassExpression!==null)
		{
			$data=$this->dataProvider->data[$row];
			echo '<tr class="'.$this->evaluateExpression($this->rowCssClassExpression,array('row'=>$row,'data'=>$data)).'">';
		}
		else if(is_array($this->rowCssClass) && ($n=count($this->rowCssClass))>0)
                {
                        $data=$this->dataProvider->data[$row];  //读取当前行数据
                       echo '<tr class="'.$this->rowCssClass[$row%$n].'"  target="sid_user" rel="'.$data['Id'].'">';//将id值写在tr的rel中，便于dwz选择行
                }
                else
			echo '<tr>';                    	
                
                foreach($this->columns as $column)
			$column->renderDataCell($row);
         	echo "</tr>\n";
  }
     
       /**
	 * Renders the summary text.
        * 添加覆写方法，重写summary--太阳浴血
	 */
	public function renderSummary()
	{
		if(($count=$this->dataProvider->getItemCount())<=0)
			return;

		$mysummary= '';
		if($this->enablePagination)
		{
			$pagination=$this->dataProvider->getPagination();
			$total=$this->dataProvider->getTotalItemCount();
			$start=$pagination->currentPage*$pagination->pageSize+1;
			$end=$start+$count-1;
			if($end>$total)
			{
				$end=$total;
				$start=$end-$count+1;
			}
			if(($summaryText=$this->summaryText)===null)
				$summaryText=Yii::t('zii','Displaying {start}-{end} of 1 result.|Displaying {start}-{end} of {count} results.',$total);
			$mysummary=strtr($summaryText,array(
				'{start}'=>$start,
				'{end}'=>$end,
				'{count}'=>$total,
				'{page}'=>$pagination->currentPage+1,
				'{pages}'=>$pagination->pageCount,
			));
		}
		else
		{
			if(($summaryText=$this->summaryText)===null)
				$summaryText=Yii::t('zii','Total 1 result.|Total {count} results.',$count);
			$mysummary=strtr($summaryText,array(
				'{count}'=>$count,
				'{start}'=>1,
				'{end}'=>$count,
				'{page}'=>1,
				'{pages}'=>1,
			));
		}
		//echo '</div>';
                $this->mysummary=$mysummary;
	}
        
    /**
     * Renders the table header.
     * ================
     * 搞不定 这个难度太高
     * ================
     */
    public function renderTableHeader()
    {
        if(!$this->hideHeader)
        {
            echo "<thead>\n";      
            if($this->filterPosition===self::FILTER_POS_HEADER)
                $this->renderFilter();

            echo "<tr>\n";
            foreach($this->columns as $column){
                // 修改的地方
                if(property_exists($column,'name')){
                  //  $column->headerHtmlOptions['orderfield'] = $column->name;
                }
                $column->renderHeaderCell();
            }
            echo "</tr>\n";

            if($this->filterPosition===self::FILTER_POS_BODY)
                  $this->renderFilter();

            echo "</thead>\n";
        }
        elseif($this->filter!==null && ($this->filterPosition===self::FILTER_POS_HEADER || $this->filterPosition===self::FILTER_POS_BODY))
        {
            echo "<thead>\n";
            $this->renderFilter();
            echo "</thead>\n";
        }
    }

    /**
     * 本方法复写了原始的实现  拷贝并修改
     * 以满足dwz表格的结构
     */
    public function renderItems()
    {


        //$this->itemsCssClass .= ' table';
        $this->itemsCssClass .= ' list';
        $this->tableHtmlOptions['layoutH'] = '118';

        $tableAttributes = empty($this->tableHtmlOptions) ? '' : CHtml::renderAttributes($this->tableHtmlOptions);
        // die($tableAttributes. __METHOD__);

        if ($this->dataProvider->getItemCount() > 0 || $this->showTableOnEmpty) {
           // $this->dataProvider->getPagination()->setCurrentPage($this->dataProvider->getPagination()->currentPage-1);
            echo "<table class=\"{$this->itemsCssClass}\" {$tableAttributes} width='100%'>\n";
            $this->renderTableHeader();
            ob_start();
            $this->renderTableBody();
            $body = ob_get_clean();
            $this->renderTableFooter();
            echo $body; // TFOOT must appear before TBODY according to the standard.
            echo "</table>";
        } else
            $this->renderEmptyText();
    }

    public function registerClientScript()
    {
        parent::registerClientScript();
        $cs = Yii::app()->getClientScript();

        $id = $this->getId();
        $cs->registerScript('fixUI', "function fixUI(){
            initLayout();initUI(navTab.getCurrentPanel());
             //  var url = $('#{$id}').yiiGridView('getUrl')
             //$('#pageForm').attr('action',url); // 纠正url
        }");
    }

    protected function renderPageForm($return = true)
    {
        $pagination = $this->dataProvider->getPagination();
        $controller = Yii::app()->getController();
        $url = $pagination->createPageUrl($controller, $pagination->currentPage);
        $pageForm = <<<PF
<form id="pagerForm" action="{$url}" method="post">
      <input type="hidden" name="pageNum" value="1" /><!--【必须】value=1可以写死-->

      <!--【可选】其它查询条件，业务有关，有什么查询条件就加什么参数。
      也可以在searchForm上设置属性rel=”pagerForm”，js框架会自动把searchForm搜索条件复制到pagerForm中 -->
</form>
PF;
        if ($return == true) {
            return $pageForm;
        } else {
            echo $pageForm;
        }
    }

    public function renderPager()
    {
         //使用了clinkpagerchina组件。太阳浴血
         $pages=$this->dataProvider->getPagination();
         //$linkType=array('target'=>'navTab','rel'=>'art_manager');
         echo '<div class="panelBar" style="text-align:right;padding:6px;"><span style="float:left;">'.$this->mysummary.'</span><span>';
         $this->widget('CLinkPagerChina',array('pages'=>$pages,'linkType'=>$this->linkType));
         echo '</span></div>';
    }
            
                        
        /*                
        $pagination = $this->dataProvider->getPagination();
        $pagerTotalCount = $pagination->getItemCount();
        $totalCount = $pagination->getItemCount();
        $numPerPage = $pagination->getPageSize();
        $pageNumShown = 10;//$pagination->getPageCount();
        $currentPage = $pagination->getCurrentPage() +1;

        $pagerHtml = <<<PAGER
       <div class="panelBar">
		<div class="pages">
			<span>{$this->mysummary}</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="{$totalCount}" numPerPage="{$numPerPage}" pageNumShown="{$pageNumShown}" currentPage="{$currentPage}"></div>
	</div>
       PAGER;
        echo $pagerHtml;
        $this->renderPageForm(false);
   
         */ 
      // }
         
}

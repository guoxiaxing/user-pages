<?php 
	class Page{
		//提供给外面的属性
		//每页的数据条数
		public $length;
		//下一页数据的起始位置
		public $offset;
		//下一页的页数
		public $next;
		//上一页的页数
		public $pre;
		//是否禁用按钮
		public $ndis;
		public $pdis;
		//构造方法
		public function __construct($tot,$len){
			//获取当前页数
			$page = $_GET['p'] ? $_GET['p'] : 1;
			$this->length = $len;
			// 总页数
			$pages = ceil($tot/$this->length);
			$this->offset =($page-1)*$this->length; 
			$this->pre = $page - 1;
			$this->next = $page + 1;
			//判断若为最后一页或者是第一页时则不能再点击对应按钮
			if($page==1){
				$this->pdis = 'disabled';
			}else{
				$this->pdis = '';
			}
			if($page==$pages){
				$this->ndis = 'disabled';
			}else{
				$this->ndis = '';
			}
		}
		//显示分页的函数
		public function show(){
			echo "<a href='index.php?p=$this->pre' class='btn btn-warning $this->pdis'>上一页</a>
		<a href='index.php?p=$this->next' class='btn btn-primary $this->ndis'>下一页</a>";
		}

	}
 ?>
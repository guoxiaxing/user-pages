<!-- 包含config.php文件 -->
<?php 
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	include './config.php';

	//使用分页类来实现分页功能
	include './Page.class.php';
	//获取当前数据表中数据的条数
	$sqlTot = 'select count(*) from stu';
	$smtTot = $pdo->prepare($sqlTot);
	if($smtTot->execute()){
		$tot = $smtTot -> fetchColumn();
	}
	//创建一个分页类的实例
	//传入两个参数一个为总的数据条数，另一个为每页的条数
	$page = new Page($tot,3);
	//设置一页所显示数据的条数
	// $length = 3;
	// // 页数
	// $pages = ceil($tot/$length);
	//获取当前页数
	// $page = $_GET['p'] ? $_GET['p'] : 1;
	// $pre = $page - 1;
	// $next = $page + 1;
	// $p = ($page-1)*$length;
	$sql = "select * from stu limit {$page->offset},{$page->length}";
	// $sql = "select * from stu limit {$p},{$length}";
	$smt = $pdo->prepare($sql);
	$smt->execute();
	$rows = $smt->fetchAll();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<script src='jquery.min.js'></script>
	<link rel="stylesheet" href="bootstrap.min.css">
	<style>
		body{
			font-family: 'Microsoft YaHei';
		}
	</style>
</head>
<body>
	<h3 align='center'>用户数据表</h3>
	<table class='table table-striped table-bordered'>
		<tr>
			<th>序号</th>
			<th>姓名</th>
			<th>成绩</th>
			<th>删除</th>
			<th>添加</th>
		</tr>
		<?php 
			foreach ($rows as $row) {
				echo '<tr>';
				echo "<td>{$row['id']}</td>";
				echo "<td>{$row['name']}</td>";
				echo "<td>{$row['score']}</td>";
				echo "<td><a href='delete.php?id={$row['id']}' class='btn btn-danger delete'>删除</a></td>";
				echo "<td><a href='edit.php?id={$row['id']}' class='btn btn-success'>修改</a></td>";
				echo '</tr>';
			}
		 ?>
		
	</table>
	<a href="" class='btn btn-info'>显示数据</a>
	<a href="add.php" class='btn btn-success'>添加用户</a>
	<a href="clear.php" class='btn btn-danger'>清空用户</a>
	<hr>
	<p>
		<?php 
		//判断若为最后一页或者是第一页时则不能再点击对应按钮
			// if($page==1){
			// 	$pdis = 'disabled';
			// }else{
			// 	$pdis = '';
			// }
			// if($page==$pages){
			// 	$ndis = 'disabled';
			// }else{
			// 	$ndis = '';
			// }
		$page->show();
		 ?>
		<!-- <a href="index.php?p=<?php echo $pre?>" class='btn btn-warning <?php echo $pdis?>'>上一页</a>
		<a href="index.php?p=<?php echo $next?>" class='btn btn-primary <?php echo $ndis?>'>下一页</a> -->
	</p>
	<script>
		$('.delete').click(function(){
			var del = confirm('是否确认删除数据?');
			if(!del){
				return false;
			}
		});
	</script>
</body>
</html>
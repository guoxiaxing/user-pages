<?php 
	include 'config.php';
	//获取修改后的信息
	$name = $_POST['name'];
	$score = $_POST['score'];
	$id = $_POST['id'];
	//准备SQL语句
	$sql = "update stu set name='{$name}',score='{$score}' where id={$id}";
	$smt = $pdo->prepare($sql);
	if($smt->execute()){
		echo "<script>location = 'index.php'</script>";
	}
 ?>
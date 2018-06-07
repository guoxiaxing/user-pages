<?php 
	include 'config.php';
	//获取所添加的信息
	$name = $_POST['name'];
	$score = $_POST['score'];
	// 准备SQL语句
	$sql = "insert into stu(name,score) values('{$name}','{$score}')";
	$smt = $pdo->prepare($sql);
	if($smt->execute()){
		echo "<script>location='index.php'</script>";
	}
 ?>
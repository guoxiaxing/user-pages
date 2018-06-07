<?php 
	include './config.php';
	//接受传过来的ID值
	$id = $_GET['id'];
	$sql = "delete from stu where id={$id}";
	$smt = $pdo->prepare($sql);
	if($smt->execute()){
		// 执行成功后返回index页面
		echo "<script>location='index.php'</script>";
	}


 ?>
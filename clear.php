<?php 
	include 'config.php';
	$sql = 'truncate stu';
	$smt = $pdo->prepare($sql);
	if($smt->execute()){
		echo "<script>location = 'index.php'</script>";
	}
	
 ?>
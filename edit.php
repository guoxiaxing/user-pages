<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>add</title>
	<script src='jquery.min.js'></script>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body> 
	<h1 align='center'>修改信息</h1>
	<form action="update.php" method='post' align='center'>
		<div class='form-group'>
			<label>姓名：</label>
			<input type="text" name='name'>
		</div>
		<div class='form-group'>
			<label>成绩：</label>
			<input type="text" name='score'>
		</div>
		<!-- 添加一个隐藏表单域来获取ID -->
		<input type="hidden" name='id' value="<?php echo $_GET['id']?>">
		<button type='submit' class='btn btn-info'>提交</button>
		<button type='reset' class='btn btn-danger'>重置</button>
	</form>
</body>
</html>
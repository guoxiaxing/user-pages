<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>add</title>
	<script src='jquery.min.js'></script>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body> 
	<h1 align='center'>添加信息</h1>
	<form action="insert.php" method='post' align='center'>
		<div class='form-group'>
			<label>姓名：</label>
			<input type="text" name='name'>
		</div>
		<div class='form-group'>
			<label>成绩：</label>
			<input type="text" name='score'>
		</div>
		<button type='submit' class='btn btn-info'>提交</button>
		<button type='reset' class='btn btn-danger'>重置</button>
	</form>
</body>
</html>

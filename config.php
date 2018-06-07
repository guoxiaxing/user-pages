<?php 
	//连接数据库
	$pdo = new PDO('mysql:host=localhost;dbname=test','root','162129');
	//设置客户端字符集
	$pdo->exec('set names utf8');
	// 设置全局属性
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
 ?>
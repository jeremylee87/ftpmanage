<?php  
	//第一步：初始化数据库 
	$server_name = 'localhost'; //改成自己的mysql数据库服务器
	$db_name = 'ftp_manage';    //数据库名称
	$user_name = 'root';        //用户名
	$db_pwd ='';                //密码

	//连接数据库
	$conn=mysql_connect($server_name,$user_name,$db_pwd) or die("数据库连接失败!".mysql_error()) ; //连接数据库
	//第二步: 选择指定的数据库，设置字符集 
    mysql_select_db($db_name,$conn) or die ("数据库打开失败!".mysql_error());
    mysql_query('SET NAMES utf8')or die ("字符集设置错误");
?>
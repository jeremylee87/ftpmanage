<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 
		include("conn.php"); //引入连接数据库 

			# 获取用户信息
			$id = $_POST['id'];
			$site_name = $_POST['site_name'];
			$site_type = $_POST['site_type'];
			$ftp_url = $_POST['ftp_url'];
			$ftp_name = $_POST['ftp_name'];
			$ftp_pwd = $_POST['ftp_pwd'];
			$db_name = $_POST['db_name'];
			$db_user = $_POST['db_user'];
			$db_pwd = $_POST['db_pwd'];
			$login_url = $_POST['login_url'];
			$login_name = $_POST['login_name'];
			$login_pwd = $_POST['login_pwd'];
			$tips = $_POST['tips'];

			$sql = "insert into ftp_info(sitename,sitetype,ftpurl,ftpname,ftppwd,dbname,dbuser,dbpwd,loginurl,loginname,loginpwd,tips,modtime) values ('$site_name','$site_type','$ftp_url','$ftp_name','$ftp_pwd','$db_name','$db_user','$db_pwd','$login_url','$login_name','$login_pwd','$tips',now())";

			//echo $sql;

			// 执行sql语句

			mysql_query($sql);

			// 获取影响的行数 
			$rows = mysql_affected_rows();

			//返回影响行数

			//如果影响行数>=1,则判断添加成功，否则失败

			if ($rows >= 1) {
				alert("添加成功！");
				href("index.php");
			}else{
				alert("添加失败！");
				//href("add.php");
			}

				//定义alert函数
			function alert($title){

 			 echo "<script type='text/javascript'>alert('$title');</script>";

				}

			function href($url){

  			echo "<script type='text/javascript'>window.location.href='$url'</script>";

			} 

	?>
</body>
</html>
	
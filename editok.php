<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改成功</title>
</head>
<body>
	<?php 
		require_once 'conn.php';//引入数据库连接
		//获取用户信息
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

		$sql = "update ftp_info set sitename='$site_name',sitetype='$site_type',ftpurl='$ftp_url',ftpname='$ftp_name',ftppwd='$ftp_pwd',dbname='$db_name',dbuser='$db_user',dbpwd='$db_pwd',loginurl='$login_url',loginname='$login_name',loginpwd='$login_pwd',tips='$tips',modtime=now() where id ='$id' ";
		//执行更新
		mysql_query($sql,$conn);

		//获取影响行数
		$rows = mysql_affected_rows();


		//返回影响行数

		//如果影响行数>=1,则判断添加成功，否则失败

			if ($rows >= 1) {
				alert("更新成功！");
				href("index.php");
			}else{
				alert("更新失败！");
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
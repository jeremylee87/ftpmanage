<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>删除</title>
</head>
<body>
	<?php 
		require_once 'conn.php'; //引入数据库链接
		date_default_timezone_set("PRC");//设置时区

		// 获取删除的id 
		$id = $_GET['id'];
		$row = delete($id,$conn);

		if ($row >= 1) {
			# 删除成功提示
			alert("删除成功！");
			//跳转到列表页面
			href("index.php");
		}else{
			alert("删除失败!");
		}


		function delete($id,$conn){
			//构造删除sql语句
			$sql ="delete from ftp_info where id ='$id' ";
			// 执行删除 
			mysql_query($sql,$conn);

			//获取影响行数

			$rows = mysql_affected_rows();

			//返回影响行数

			return $rows;

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
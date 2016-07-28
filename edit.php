<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改页面</title>
</head>
<body>
	<?php 
		require_once 'conn.php';
		//获取id
		$id = $_GET['id'];

		//设置时区
		date_default_timezone_set("PRC");

		//读取数据

		$sql = "select * from ftp_info where id = '$id' ";
		$result = mysql_query($sql,$conn);
		$ftpcon = mysql_fetch_array($result);

	 ?>
	 <form action="editok.php" method="post">
	 	<input type="hidden" name="id" value=<?php echo $ftpcon['id']; ?> >
	 	<table>
			<tr>
				<td>站点名称(必填)</td>
				<td>类型</td>
				<td>FTP地址</td>
				<td>FTP账号</td>
				<td>FTP密码</td>
				<td>数据库名称</td>
				<td>数据库用户</td>
				<td>数据库密码</td>
				<td>后台登录地址</td>
				<td>登录用户名</td>
				<td>登录密码</td>
				<td>备注</td>
			</tr>
			<tr>
				<td><input type="text" name="site_name" required="required" value=<?php echo $ftpcon['sitename']; ?> ></td>
				<td>
				<select name="site_type">
					<option value="PC" <?php if($site_type==PC) echo "selected=\"selected\""; ?> >PC</option>
					<option value="Mobile" <?php if($site_type==Mobile) echo "selected=\"selected\""; ?> >Mobile</option>
				</select>
				</td>
				<td><input type="text" name="ftp_url" value=<?php echo $ftpcon['ftpurl']; ?> ></td>
				<td><input type="text" name="ftp_name" value=<?php echo $ftpcon['ftpname']; ?> ></td>
				<td><input type="text" name="ftp_pwd" value=<?php echo $ftpcon['ftppwd']; ?> ></td>
				<td><input type="text" name="db_name" value=<?php echo $ftpcon['dbname']; ?> ></td>
				<td><input type="text" name="db_user" value=<?php echo $ftpcon['dbuser']; ?> ></td>
				<td><input type="text" name="db_pwd" value=<?php echo $ftpcon['dbpwd']; ?> ></td>
				<td><input type="text" name="login_url" value=<?php echo $ftpcon['loginurl']; ?> ></td>
				<td><input type="text" name="login_name" value=<?php echo $ftpcon['loginname']; ?> ></td>
				<td><input type="text" name="login_pwd" value=<?php echo $ftpcon['loginpwd']; ?> ></td>
				<td><input type="text" name="tips" value=<?php echo $ftpcon['tips']; ?> ></td>
			</tr>
			<tr>
				<td><input type="reset" name="reset" value="重置"><input type="submit" name="submit" value="修改"></td>
				
			</tr>
		</table>
	 	

	 </form>
</body>
</html>
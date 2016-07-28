<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>增加页面</title>
	<style>
		table tr td{font-size: 12px;}
		input{font-size: 12px;}
	</style>
	 
</head>
<body>
	
	<form action="addok.php" method="post">
		<input type="hidden" name="id" value=""/>
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
				<td><input type="text" name="site_name" required="required" ></td>
				<td>
				<select name="site_type">
					<option value="PC">PC</option>
					<option value="Mobile">Mobile</option>
				</select>
				</td>
				<td><input type="text" name="ftp_url"></td>
				<td><input type="text" name="ftp_name"></td>
				<td><input type="text" name="ftp_pwd"></td>
				<td><input type="text" name="db_name"></td>
				<td><input type="text" name="db_user"></td>
				<td><input type="text" name="db_pwd"></td>
				<td><input type="text" name="login_url"></td>
				<td><input type="text" name="login_name"></td>
				<td><input type="text" name="login_pwd"></td>
				<td><input type="text" name="tips"></td>
			</tr>
			<tr>
				<td><input type="reset" name="reset" value="重置"><input type="submit" name="submit" value="添加"></td>
				
			</tr>
		</table>
	</form>
</body>
</html>
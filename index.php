<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>站点信息</title>
	<style>
		table tr td{font-size: 12px;text-align: center;line-height: 2em;}
		input{font-size: 12px;}
	</style>
</head>
<body>
<a href="add.php">添加记录</a>
	<table border="1" cellspacing="0" cellpadding="0" id="ftpinfo">
			<tr>
				<td>操作</td>
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
				<td>修改时间</td>
			</tr>
			<?php 
				require_once 'conn.php';  //引入数据库链接
				date_default_timezone_set("PRC"); //设置时区
				//读取数据
				$sql = "select * from ftp_info order by id asc";
				$result = mysql_query($sql);
				$ftpinfo = ''; 
				while ($rs = mysql_fetch_array($result)) {
					# 获取结果
					$ftpinfo[] = $rs;
				}
				//循环ftp信息列表
				foreach ($ftpinfo as $ftpcon) {
					
					echo "

					<tr>
						<td>
						<a href='add.php'>增</a>
						<a href='edit.php?id=".$ftpcon['id']."');\"> 改</a>
						<a href='del.php?id=".$ftpcon['id']."');\" onclick='return confirm(\"是否真的要删除当前记录?\")'> 删</a>

              </td>
						<td>".$ftpcon['sitename']."</td>
						<td>".$ftpcon['sitetype']."</td>
						<td>".$ftpcon['ftpurl']."</td>
						<td>".$ftpcon['ftpname']."</td>
						<td>".$ftpcon['ftppwd']."</td>
						<td>".$ftpcon['dbname']."</td>
						<td>".$ftpcon['dbuser']."</td>
						<td>".$ftpcon['dbpwd']."</td>
						<td><a href='".$ftpcon['loginurl']."' target='_blank'>".$ftpcon['loginurl']."</a></td>
						<td>".$ftpcon['loginname']."</td>
						<td>".$ftpcon['loginpwd']."</td>
						<td>".$ftpcon['tips']."</td>
						<td>".$ftpcon['modtime']."</td>

					</tr>


					";
				}

    

			 ?>

<!--添加表格-->

<!--			 
<form action="addok.php" method="post">
			 <input type="hidden" name="id" value=""/>

			 <tr>
			 	<td><input type="reset" name="reset" value="重置"><input type="submit" name="submit" value="添加"></td>
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
				<td></td>
			</tr>

			</form>

			-->
		</table>

</body>
</html>
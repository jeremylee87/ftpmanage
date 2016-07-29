<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>站点信息</title>
	<style>
		h2{text-align: center;}
		table.t_talbe{
			font-size:11px;
			color:#333333;
			border-width: 1px;
			border-color: #666666;
		}
		table.t_table th{
			border-width: 1px;
			padding: 2px;
			border-style: solid;
			border-color: #666666;
			background-color: #dedede;
			font-size: 12px;
			line-height: 1.2em;
		}
		table.t_table td{
			border-width: 1px;
			padding: 2px;
			border-style: solid;
			border-color: #666666;
			background-color: #ffffff;
			font-size: 12px;
			line-height: 1.2em;
		}
		input{font-size: 9px;}
		.add_rs{margin:10px;display: block;width:150px;text-align: center;font-weight: bold;color: red;}
		.bt_name{}
		.bt_name td{font-size: 12px;font-weight: bold;}
		.td_modi{font-size: 14px;}
	</style>
</head>
<body>
<h2>FTP信息管理系统</h2>
<a class="add_rs" href="add.php">添加记录</a>
	<table class="t_table" border="0" cellpadding="0" cellspacing="0"  id="ftpinfo">
		<!--添加表格
		 
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
添加表格结束-->

			<tr class="bt_name">
				<th>操作</th>
				<th>站点名称(必填)</th>
				<th>类型</th>
				<th>FTP地址</th>
				<th>FTP账号</th>
				<th>FTP密码</th>
				<th>数据库名称</th>
				<th>数据库用户</th>
				<th>数据库密码</th>
				<th>后台登录地址</th>
				<th>登录用户名</th>
				<th>登录密码</th>
				<th>备注</th>
				<th>修改时间</th>
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

					<tr >
						<td width=60 class='td_modi'>
						<a href='add.php'>增</a>
						<a href='edit.php?id=".$ftpcon['id']."'> 改</a>
						<a href='del.php?id=".$ftpcon['id']."' onclick='return confirm(\"是否真的要删除当前记录?\")'> 删</a>

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



		
		</table>

</body>
</html>
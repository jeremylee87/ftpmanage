<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>站点信息</title>
	<style>
		*{font-family: "Micosoft yahei"}
		h2{text-align: center;}
		table{border:1px solid #999;}
		table.t_talbe{
			font-size:11px;
			border-collapse:collapse;border:none;

		}
		table.t_table th{
			border:#999 solid 1px;
			background-color: #dedede;
			font-size: 12px;
			line-height: 1.2em;
		}
		table.t_table td{
			border:#999 solid 1px;
			text-align: center;
			font-size: 12px;
			line-height: 1.2em;
		}
		input,select{margin:0;padding:0;}
		input[type=text]{font-size: 9px;height: 1.8em;line-height: 1.8em;}
		input:focus{
    			border-style:solid;
    			border-color:blue;
			}
		.add_rs{margin:10px;display: block;width:150px;text-align: center;font-weight: bold;color: red;}
		.bt_name{height: 2em;}
		.bt_name td{font-size: 12px;font-weight: bold;}
		.td_modi a{font-size: 1.2em;}
		.site_name{width: 80px;}
		.site_type{width: 65px;}
		.ftp_name{width: 90px;}
		.ftp_pwd{width: 120px;}
		.ftp_url{width: 70px;}
		.db_name,.db_pwd,.modi_time{width: 75px;}
		.db_user,.login_name{width: 60px;}
		.login_url{width: 150px;}
		.login_pwd{width: 75px;}
		.add_tr{height: 2em;}
		.add_ok{font-size: 1.5em;}
	</style>
	<script language="javascript">
		function submitcheck(obj) {
				if (document.getElementById('site_name').value == '') {
            		alert('必须输入站点名称！');
           			document.getElementById('site_name').focus();
            		return false;
        		} else if (document.getElementById('ftp_url').value == '') {
            		alert('必须输入Ftp地址！');
            		document.getElementById('ftp_url').focus();
           			return false;
        		}else if(document.getElementById('ftp_name').value ==''){
        			alert('必须输入Ftp账号！');
            		document.getElementById('ftp_name').focus();
           			return false;
        		}else if(document.getElementById('ftp_pwd').value ==''){
        			alert('必须输入Ftp密码！');
            		document.getElementById('ftp_pwd').focus();
           			return false;
        		}
        		 else {
            		obj.submit();
        		}
			}
		function b_reset(){
			document.getElementById('add_rs').reset();
		}
</script>
</head>
<body>
<h2>FTP信息管理系统</h2>
<!--<a class="add_rs" href="add.php">添加记录</a>-->
	<table class="t_table" border="0" cellpadding="0" cellspacing="0"  id="ftpinfo">
			<tr class="bt_name">
				<th>操作</th>
				<th>站点名称(*)</th>
				<th>类型</th>
				<th>FTP地址(*)</th>
				<th>FTP账号(*)</th>
				<th>FTP密码(*)</th>
				<th>数据库名称</th>
				<th>数据库用户</th>
				<th>数据库密码</th>
				<th>后台登录地址</th>
				<th>登录用户名</th>
				<th>登录密码</th>
				<th>备注</th>
				<th>修改时间</th>
			</tr>
			<!--添加表格-->
			 <tr>
			 <form id="add_rs" name="add_rs" action="addok.php" method="post">
			 <input type="hidden" name="id" value=""/>
			 <td class="add_tr"><a class="add_ok" href="javascript:void(0);" onclick="b_reset()" >重置</a></td>
			 	<!--<td><input type="reset" name="reset" value="重置"><input type="submit" name="submit" value="添加"></td>-->
				<td><input class="site_name" type="text" name="site_name" id="site_name" required="required" ></td>
				<td>
				<select class="site_type" name="site_type">
					<option value="PC">PC</option>
					<option value="Mobile">Mobile</option>
				</select>
				</td>
				<td><input class="ftp_url" type="text" name="ftp_url" id="ftp_url" required="required"></td>
				<td><input class="ftp_name" type="text" name="ftp_name" id="ftp_name" required="required"></td>
				<td><input class="ftp_pwd" type="text" name="ftp_pwd" id="ftp_pwd" required="required"></td>
				<td><input class="db_name" type="text" name="db_name"></td>
				<td><input class="db_user" type="text" name="db_user"></td>
				<td><input class="db_pwd" type="text" name="db_pwd"></td>
				<td><input class="login_url" type="text" name="login_url"></td>
				<td><input class="login_name" type="text" name="login_name"></td>
				<td><input class="login_pwd" type="text" name="login_pwd"></td>
				<td><input class="tips " type="text" name="tips"></td>
				<td class="modi_time"><a class="add_ok" href="javascript:void(0)" onclick="submitcheck(document.add_rs)">添加</a></td>
				</form>
			</tr>
			<!--添加表格结束-->
		<!--数据循环开始-->
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
						<!--<a href='add.php'>增</a>-->
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

<!--数据循环结束-->

<!--添加表格-->
			 <tr>
			 <form id="add_rs" name="add_rs" action="addok.php" method="post">
			 <input type="hidden" name="id" value=""/>
			 <td class="add_tr"><a class="add_ok" href="javascript:void(0);" onclick="b_reset()" >重置</a></td>
			 	<!--<td><input type="reset" name="reset" value="重置"><input type="submit" name="submit" value="添加"></td>-->
				<td><input class="site_name" type="text" name="site_name" id="site_name" required="required" ></td>
				<td>
				<select class="site_type" name="site_type">
					<option value="PC">PC</option>
					<option value="Mobile">Mobile</option>
				</select>
				</td>
				<td><input class="ftp_url" type="text" name="ftp_url" id="ftp_url" required="required"></td>
				<td><input class="ftp_name" type="text" name="ftp_name" id="ftp_name" required="required"></td>
				<td><input class="ftp_pwd" type="text" name="ftp_pwd" id="ftp_pwd" required="required"></td>
				<td><input class="db_name" type="text" name="db_name"></td>
				<td><input class="db_user" type="text" name="db_user"></td>
				<td><input class="db_pwd" type="text" name="db_pwd"></td>
				<td><input class="login_url" type="text" name="login_url"></td>
				<td><input class="login_name" type="text" name="login_name"></td>
				<td><input class="login_pwd" type="text" name="login_pwd"></td>
				<td><input class="tips " type="text" name="tips"></td>
				<td class="modi_time"><a class="add_ok" href="javascript:void(0)" onclick="submitcheck(document.add_rs)">添加</a></td>
				</form>
			</tr>
			<!--添加表格结束-->
		
		</table>

</body>
</html>
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db.php");

$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$name = $_POST['name'];
$phone = $_POST['phone'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
		$ret=mysql_query("select * from `login` where `account`='$_POST[id]';",$link);
		$row=mysql_fetch_assoc($ret);
		if(mysql_num_rows($ret)>0){
			echo "<center><font color='red'><h2>帳號重複了！</h2></font></center>";
				header("Refresh:2; url='sign_up.php'");
				exit;
		}
		else{

			if($id==""){
				echo "<center><font color='red'><h2>帳號不可為空白</h2></font></center>";
				header("Refresh:2; url='sign_up.php'");
				exit;
			}
			else{
				if($pw==""){
					echo "<center><font color='red'><h2>密碼不可為空白</h2></font></center>";
					header("Refresh:2; url='sign_up.php'");
					exit;
				}
				else{
					if($name==""){
						echo "<center><font color='red'><h2>姓名不可為空白</h2></font></center>";
						header("Refresh:2; url='sign_up.php'");
						exit;
					}
					else{
						if($phone==""||strlen($phone)<10||substr($phone,0,2)!="09"){
							echo "<center><font color='red'><h2>手機號碼輸入錯誤</h2></font></center>";
							header("Refresh:2; url='sign_up.php'");
							exit;
						}
						else{
							if($pw != $pw2){							
								echo "<center><font color='red'><h2>密碼與確認密碼不相同</h2></font></center>";
							header("Refresh:2; url='sign_up.php'");
							exit;
								}
								else{
									echo "<center><font color='green'><h2><p align='center'>新使用者增加成功</p></h2></font></center>";
								$ret=mysql_query("INSERT INTO `login` (`account`, `password`, `name`, `phone`) VALUES ('$id', PASSWORD('$pw'), '$name', '$phone');",$link);
								header("Refresh:2; url='index.php'");
								}
							
						}
					}
				}
			}
		}

?>
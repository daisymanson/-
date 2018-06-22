<?php SESSION_START(); ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>驗證頁</title>
</head>
<body>
<?php
if($_SESSION['account'] != null)
{
	include "db.php";
	$account = $_SESSION['account'];
	$sp = $_POST['sp'];
	$dp = $_POST['dp'];
	$date = $_POST['bookdate'];
	$id = $_POST['id'];

	//判斷帳號密碼是否為空值
	//確認密碼輸入的正確性


	if($sp==""){
		echo "<center><font color='red'><h2>收縮壓不可為空白</h2></font></center>";
		header("Refresh:2; url='insert_bp.php'");
		exit;
	}
	else{
		if($dp==""){
			echo "<center><font color='red'><h2>舒張壓不可為空白</h2></font></center>";
			header("Refresh:2; url='insert_bp.php'");
			exit;
		}
		else{
			
				
			echo "<center><font color='green'><h2>血壓修改成功</h2></font></center><br>";
			$ret=mysql_query("UPDATE `bp` SET `sp`='".$sp."',`dp`='".$dp."',`date`='".$date."' WHERE `id` = '".$id."' and `account` = '".$account."';",$link);
			echo "<font color='green' align='center'><p align='center'>親愛的用戶您好</p></font><br>";
			echo "<font color='green' align='center'><p align='center'>您的收縮壓為：".$sp."</p></font><br>";
			echo "<font color='green' align='center'><p align='center'>您的舒張壓為：".$dp."</p></font><br>";
			echo "<a href='main.php'><p align='center'>回首頁</p></a>  <br><br>";					
				
			
		}
	}
	
}
		
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
	?>
</body>
</html>
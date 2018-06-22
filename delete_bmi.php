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

	$id = $_GET['id'];
	//判斷帳號密碼是否為空值
	//確認密碼輸入的正確性



			
				
			echo "<center><font color='green'><h2>BMI刪除成功</h2></font></center><br>";
			$ret=mysql_query("DELETE FROM `hw` WHERE `id`='".$id."'and`account`='".$account."';",$link);
			echo '<meta http-equiv=REFRESH CONTENT=1;url=main.php>';
					

	
}
		
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
	?>
</body>
</html>
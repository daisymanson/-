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
	$height = $_POST['height'];
	$weight = $_POST['weight'];
	$bmi = $weight / (($height/100)*($height/100));
	$date = $_POST['bookdate'];
	$id = $_POST['id'];
	//判斷帳號密碼是否為空值
	//確認密碼輸入的正確性


	if($height==""){
		echo "<center><font color='red'><h2>身高不可為空白</h2></font></center>";
		header("Refresh:2; url='insert_bmi.php'");
		exit;
	}
	else{
		if($weight==""){
			echo "<center><font color='red'><h2>體重不可為空白</h2></font></center>";
			header("Refresh:2; url='insert_bmi.php'");
			exit;
		}
		else{
			
				
			echo "<center><font color='green'><h2>BMI修改成功</h2></font></center><br>";
			$ret=mysql_query("UPDATE `hw` SET `height`='".$height."',`weight`='".$weight."',`date`='".$date."' WHERE `id` = '".$id."' and `account` = '".$account."';",$link);
			echo "<font color='green' align='center'> <p align='center'>親愛的用戶您好</p></font><br>";
			echo "<font color='green' align='center'> <p align='center'>修改後，您的身高為：".$height."</p></font><br>";
			echo "<font color='green' align='center'> <p align='center'>體重為：".$weight."</p></font><br>";
			echo "<font color='green' align='center'> <p align='center'>BMI為：".substr($bmi,0,5)."</p></font><br>";
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
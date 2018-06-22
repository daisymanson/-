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
	$id = $_SESSION['account'];
	$tc = $_POST['tc'];
	$tg = $_POST['tg'];
	$hdl = $_POST['hdl'];
	$ldl = $_POST['ldl'];
	$date = $_POST['bookdate'];
	
	//判斷帳號密碼是否為空值
	//確認密碼輸入的正確性


	if($tc==""){
		echo "<center><font color='red'><h2>總膽固醇不可為空白</h2></font></center>";
		header("Refresh:2; url='insert_bl.php'");
		exit;
	}
	else{
		if($tg==""){
			echo "<center><font color='red'><h2>三酸甘油脂不可為空白</h2></font></center>";
			header("Refresh:2; url='insert_bl.php'");
			exit;
		}
		else{
			if($hdl==""){
			echo "<center><font color='red'><h2>高密度脂蛋白不可為空白</h2></font></center>";
			header("Refresh:2; url='insert_bl.php'");
			exit;
		}
		else{
			if($ldl==""){
			echo "<center><font color='red'><h2>低密度脂蛋白不可為空白</h2></font></center>";
			header("Refresh:2; url='insert_bl.php'");
			exit;
		}
		else{
			echo "<center><font color='green'><h2>血脂增加成功</h2></font></center><br>";
			$ret=mysql_query("INSERT INTO `bl` (`id`, `account`, `tc`, `tg`, `hdl`, `ldl`,`date`) VALUES (null, '".$id."', '".$tc."', '".$tg."', '".$hdl."', '".$ldl."','".$date."');",$link);
			echo "<font color='green' align='center'><p align='center'>親愛的用戶您好</p></font><br>";
			echo "<font color='green' align='center'> <p align='center'>您的總膽固醇為：".$tc."</p></font><br>";
			echo "<font color='green' align='center'> <p align='center'>您的三酸甘油脂為：".$tg."</p></font><br>";
			echo "<font color='green' align='center'> <p align='center'>您的高密度脂蛋白為：".$hdl."</p></font><br>";
			echo "<font color='green' align='center'> <p align='center'>您的低密度脂蛋白為：".$ldl."</p></font><br>";
			echo "<font color='green' align='center'><p align='center'>輸入日期為：".$date."</p></font><br>";			
			echo "<a href='main.php'><p align='center'>回首頁</p></a>  <br><br>";			}
			}
				
			
					
				
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
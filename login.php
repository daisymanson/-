<?php SESSION_START(); ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>驗證頁</title>
</head>
<body>
	<?php
		include "db.php";
		$ret=mysql_query("select * from `login` where `account`='$_POST[id]' and `password`=password('$_POST[password]');",$link);
		$row=mysql_fetch_assoc($ret);
		if(mysql_num_rows($ret)>0){
			$_SESSION["account"]=$row["account"];

			echo "<font color='green'><h2 align='center'>歡迎".$row['name']."回來~~</h2></font>";
			header("Refresh:2; url='main.php'");
		}
		else{
			unset($_SESSION["id"]);
			echo "<font color='red'><h2>帳號密碼錯誤</h2></font>";
			header("Refresh:2; url='index.php'");
		}
	?>
</body>
</html>
<?php session_start(); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<center><h2>肝指數查詢</h2></center><br/><br/>
<?php
if($_SESSION['account'] != null)
{
?>
<form name="form" method="post">
<table border='1' align="center">
<tr><th></th><th>GOT</th><th>GPT</th><th>日期</th><th>修改、刪除</th></tr>
<?php
include 'db.php';
$account = $_SESSION['account'];
$ret=mysql_query("select * from le where account = '".$account."'",$link);
$sum=0;

while ($row=mysql_fetch_assoc($ret)){ 

$sum++;

echo"<tr align='center'>
<td>$sum</td>
<td>$row[got]</td>
<td>$row[gpt]</td>
<td>$row[date]</td>
<td><a href='update_le.php?id=$row[id]'>修改</a>/<a href='delete_le.php?id=$row[id]'>刪除</a></td>

</tr>";
}?>
			<tr><td colspan = '5' align='center'><input type='button' name='btn6'style='width:150' value='回上一頁'onClick="this.form.action='main.php';this.form.submit();"/></td></tr>
			</form>
<?php
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>
</table>
</body>
</html>
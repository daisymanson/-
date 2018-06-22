<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db.php");


//此判斷為判定觀看此頁有沒有權限
//說不定是路人或不相關的使用者
//因此要給予排除
if($_SESSION['account'] != null)
{
	?>
<h1 align="center">首頁</h1><br/><br/><br/><br/><br/>
<form name="form" method="post">
<table align="center">
<tr><td><input type="button" name="btn1"style="width:150"  value="新增各項指數" onClick="this.form.action='main_insert.php';this.form.submit();"/></td></tr>
<tr><td><input type="button" name="btn2"style="width:150"  value="查詢BMI" onClick="this.form.action='select_bmi.php';this.form.submit();"/></td></tr>
<tr><td><input type="button" name="btn3"style="width:150"  value="查詢血壓" onClick="this.form.action='select_bp.php';this.form.submit();"/></td></tr>
<tr><td><input type="button" name="btn4"style="width:150"  value="查詢血糖" onClick="this.form.action='select_bs.php';this.form.submit();"/></td></tr>
<tr><td><input type="button" name="btn5"style="width:150"  value="查詢血脂" onClick="this.form.action='select_bl.php';this.form.submit();"/></td></tr>
<tr><td><input type="button" name="btn6"style="width:150"  value="查詢肝指數" onClick="this.form.action='select_le.php';this.form.submit();"/></td></tr>
<tr><td><input type="button" name="btn7"style="width:150"  value="登出" onClick="this.form.action='logout.php';this.form.submit();"/></td></tr>
</table>

</form> 
 <?php      
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>
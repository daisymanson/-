<?php session_start(); ?>
<html>
<?php
include("db.php");


//此判斷為判定觀看此頁有沒有權限
//說不定是路人或不相關的使用者
//因此要給予排除
if($_SESSION['account'] != null)
{?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h1 align="center">健康指數評估系統</h1><br/>
<h2 align="center">新增血糖</h2><br/><br/><br/><br/><br/>
<form name="form" method="post" action="insert_bs2.php">
<table align="center">
<tr><td>飯前血糖值：</td><td><input type="text" name="bs" /></td></tr>
<tr><td>日期：</td><td><input type="date" name="bookdate" id="bookdate" min="<?=date('Y-m-d', strtotime("-14 day", time()))?>" max="<?=date('Y-m-d')?>" value="<?=date('Y-m-d')?>" ></td></tr>
<tr><td colspan="2" align="center"><input type="submit"style="width:100" name="btn1" value="送出"/></td></tr>
<tr><td colspan="2" align="center"><input type="reset"style="width:100" name="btn2" value="清除	"/></td></tr>
<tr><td colspan="2" align="center"><input type="button"style="width:100" name="btn2" value="回上一頁" onClick="this.form.action='main_insert.php';this.form.submit();"/></td></tr>
</table>
</form>
</body>
<?php        
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>
<html>

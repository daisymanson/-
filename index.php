<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h1 align="center">健康指數評估系統</h1><br/>
<h2 align="center">登入</h2><br/><br/><br/><br/><br/>
<form name="form" method="post" action="login.php">
<table align="center">
<tr><td>帳號：</td><td><input type="text" name="id" /></td></tr>
<tr><td>密碼：</td><td><input type="password" name="password" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="btn1" value="登入"/></td></tr>
<tr><td colspan="2" align="center"><input type="button" name="btn2" value="註冊" onClick="this.form.action='sign_up.php';this.form.submit();"/></td></tr>
</table>
</form>
</body>
<html>
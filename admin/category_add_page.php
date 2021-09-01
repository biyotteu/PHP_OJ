<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=EUC-KR">
<title>Category_add</title>
</head>
<body>

<?php require_once("../include/db_info.inc.php");?>
<?php require_once("admin-header.php");
if (!(isset($_SESSION['administrator']))){
	echo "<a href='../loginpage.php'>로그인을 해주세요!</a>";
	exit(1);
}
?>
<form method=POST action="category_add.php">
<p>분류추가</p>
<p><input type=text name=Name size=50 /></p>
<p> <input type=submit value=Submit name=submit /></p>
<?php require_once("../include/set_post_key.php");?>

</form></body>
</html>


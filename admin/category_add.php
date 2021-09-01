<?php require_once ("admin-header.php");
require_once("../include/check_post_key.php");
if (!(isset($_SESSION['administrator']))){
	echo "<a href='../loginpage.php'>로그인을 해주세요!</a>";
	exit(1);
}
?>
<?php require_once ("../include/db_info.inc.php");
?>

<?php

$title=$_POST['Name'];
if (get_magic_quotes_gpc ()){
	$title = stripslashes ( $title);
}

$sql="insert into Category(Category_title) values(?)";
pdo_query($sql, $title);
echo $title?>

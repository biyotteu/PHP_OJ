<?php
require_once ("admin-header.php");
require_once("../include/check_post_key.php");
if (!(isset($_SESSION['administrator']))){
	echo "<a href='../loginpage.php'>로그인을 해주세요!</a>";
	exit(1);
}
require_once ("../include/db_info.inc.php");
$sql = "select * FROM users";
$result = pdo_query($sql);
$ID = $_POST['ID'];
$check = 1;
$cnt = 0;

foreach ($result as $row) {
  if($ID == $row['user_id']){

  }
}
echo "<h1>변경완료</h1>";
?>

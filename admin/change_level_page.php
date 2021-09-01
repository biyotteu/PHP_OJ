<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=EUC-KR">
<title>change_level</title>
</head>
<body>
<h1>레벨 변경</h1>

<?php require_once("../include/db_info.inc.php");?>
<?php require_once("admin-header.php");
if (!(isset($_SESSION['administrator']))){
	echo "<a href='../loginpage.php'>로그인을 해주세요!</a>";
	exit(1);
}
?>
<?php
$sql = "select * FROM users";
$result = pdo_query($sql); ?>
<form method=POST action="change_level.php">
      <select name="ID" class="selectpicker" data-show-subtext="true" data-live-search="true">
	<?php foreach($result as $row)
		echo"<option value=".$row['user_id']."data-subtext='".$row['user_id']."'>".$row['nick']."</option>";?>
</select>
<input type="number"  name="level" min="0" max="100" required/>
<input class='btn btn-primary' type=submit value=Submit name=submit>
<?php require_once("../include/set_post_key.php");?>
</form></body>
 <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

</html>

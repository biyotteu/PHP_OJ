<html>
<head>
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Content-Language" content="zh-cn">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>New Problem</title>
</head>
<body leftmargin="30" >

<?php require_once("../include/db_info.inc.php");?>
<?php require_once("admin-header.php");
if (!(isset($_SESSION['administrator'])||isset($_SESSION['problem_editor']))){
	echo "<a href='../loginpage.php'>Please Login First!</a>";
	exit(1);
}
?>
<?php
include_once("kindeditor.php") ;
?>
<?php $Csql="select Category_title ,Category_id FROM Category order by Category_id asc";
			$Lsql="select level_num FROM level order by level_num asc";
$Cresult=pdo_query($Csql);
$Lresult=pdo_query($Lsql);
?>
<h1 >문제 추가</h1>

<form method=POST action=problem_add.php>
<input type=hidden name=problem_id value="New Problem">
<p align=left>Problem Id:&nbsp;&nbsp;New Problem</p>
<p align=left>Title:<input class="input input-xxlarge" type=text name=title size=71></p>
<p align=left>Category
<select name="cate">
	<?php foreach ($Cresult as $row)
		echo "<option value=".$row['Category_id'].">".$row['Category_title']."</option>";?>
</select>
</p>
<p align=left>Level
<select name="level">
	<?php foreach ($Lsql as $row)
		echo "<option value=".$row['level_num'].">".$row['level_num']."</option>";?>
</select>
</p>
<p align=left>Time Limit:<input type=text name=time_limit size=20 value=1>S</p>
<p align=left>Memory Limit:<input type=text name=memory_limit size=20 value=128>MByte</p>
<p align=left>Description:<br>
<textarea class="kindeditor" rows=13 name=description cols=80></textarea>

</p>

<p align=left>Input:<br>
<textarea  class="kindeditor" rows=13 name=input cols=80></textarea>

</p>

</p>
<p align=left>Output:<br>
<textarea  class="kindeditor" rows=13 name=output cols=80></textarea>



</p>
<p align=left>Sample Input:<br><textarea  class="input input-xxlarge"  rows=13 name=sample_input cols=80></textarea></p>
<p align=left>Sample Output:<br><textarea  class="input input-xxlarge"  rows=13 name=sample_output cols=80></textarea></p>
<p align=left>Test Input:<br><textarea  class="input input-xxlarge" rows=13 name=test_input cols=80></textarea></p>
<p align=left>Test Output:<br><textarea  class="input input-xxlarge"  rows=13 name=test_output cols=80></textarea></p>
<p align=left>Hint:<br>
<textarea class="kindeditor" rows=13 name=hint cols=80></textarea>
</p>
<p>SpecialJudge: N<input type=radio name=spj value='0' checked>Y<input type=radio name=spj value='1'></p>
<p align=left>Source:<br><textarea name=source rows=1 cols=70></textarea></p>
<p align=left>contest:
	<select  name=contest_id>
<?php

 $sql="SELECT `contest_id`,`title` FROM `contest` WHERE `start_time`>NOW() order by `contest_id`";
$result=pdo_query($sql);
echo "<option value=''>none</option>";
if (count($result)==0){
}else{
	foreach($result as $row){
		echo "<option value='{$row['contest_id']}'>{$row['contest_id']} {$row['title']}</option>";
	}
}
?>
	</select>
</p>
<div align=center>
<?php require_once("../include/set_post_key.php");?>
<input type=submit value=Submit name=submit>
</div></form>
<p>

</body></html>

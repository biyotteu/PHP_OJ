<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $OJ_NAME?></title>
    <?php include("template/$OJ_TEMPLATE/css.php");?>
  </head>

	<body>

	<div class="container">
	<?php include("template/$OJ_TEMPLATE/nav.php");?>
	  <div class="jumbotron">
<center>
<table id='problem_categoryT' width='90%' class='table table-striped'>
<thead>
<tr class='toprow'>
<th width='80%'>분류</th>
</tr>
</thead>
<tbody>
<?php foreach($result as $row)
echo "<tr><td><div class='left'><a href='problemset.php?search=".$row['Category_id']."'>".$row['Category_title']."</a></div></td></tr>";?>
</tbody>
</table>
</center>
</div>
</div>
<?php include("template/$OJ_TEMPLATE/js.php");?>
</body>
</html>


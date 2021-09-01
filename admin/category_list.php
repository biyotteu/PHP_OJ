<?php 
require("admin-header.php");
require_once("../include/set_get_key.php");
echo "<title>분류 목록</title>";
echo "<center><h2>분류 목록</h2></center>";
$sql="select Category_id, Category_title FROM Category order by Category_id asc";
$result=pdo_query($sql);
echo "<center><table width=90% border=1>";

echo "<tr><td>ID<td>TITLE</tr>";
foreach($result as $row){
	echo "<tr>";
	echo "<td>".$row['Category_id'];
	echo "<td>".$row['Category_title'];
	echo "</tr>";
}
echo "</tr></form>";
echo "</table></center>";

?>

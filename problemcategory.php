<?php
 require_once('./include/db_info.inc.php');
        require_once('./include/cache_start.php');
        require_once('./include/setlang.php');

$sql="select Category_id, Category_title FROM Category order by Category_id asc";
$result=pdo_query($sql);
require("template/".$OJ_TEMPLATE."/problemcategory.php");
if(file_exists('./include/cache_end.php'))
        require_once('./include/cache_end.php');

?>

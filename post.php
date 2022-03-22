<?php 
//var_dump($_GET);
//exit;
//die($_GET['article']);
//echo($_GET['article']);
if (!isset($_GET["article"])) {
    die("RIEN : " . $e->getMessage());
}
include("model/post1.model.php"); 

$layout_title = $title;

include("view/post.view.php"); 





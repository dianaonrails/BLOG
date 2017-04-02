<?php

require_once("../config/db.php"); 
require_once("../classes/Posts.php");

$posts = new Posts();

$posts->getPost($_GET["ID"]);

while($row = $result->fetch_assoc()){
	echo'LISTA POST<br />
	<div>'. $row['ID']  .'  ' . $row['post_title'] .' ' . $row['post_date'] .' '.$row['post_date'] .'</div>';
	
}
?>
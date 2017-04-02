<?php

require_once("../config/db.php"); 
require_once("../classes/Posts.php");

$posts = new Posts();

if($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST['post_title'])) {
        echo "Username field was empty.";
    } elseif (empty($_POST['post_description'])) {
        echo "Password field was empty.";
    } elseif (!empty($_POST['post_title']) && !empty($_POST['post_description'])) {

    	$posts->createPost($_POST['post_title'],$_POST['post_description']);
    }
}

?>

<form method="post" action="" name="postform">

    <label for="post_title">Title</label>
    <input id="post_title" class="" type="text" name="post_title" required />
    <br />
    <label for="post_description">Description</label>
    <textarea id="post_description" class="" name="post_description" required></textarea>
    <br />
    <input type="submit"  name="postcreate" value="Create" />

</form>
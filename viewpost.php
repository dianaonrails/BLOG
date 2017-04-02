<?php
	$stmt = $db->prepare('SELECT ID, post_title, post_date FROM posts WHERE ID = :ID');
	$stmt->execute(array(':ID' => $_GET['id']));
	$row = $stmt->fetch();

	if($row['ID'] == ''){
    	header('Location: ./');
    	exit;
	}

	echo '<div>';
    echo '<h1>'.$row['post_title'].'</h1>';
    echo '<p>Posted on '.date('jS M Y', strtotime($row['post_date'])).'</p>';             
	echo '</div>';
?>
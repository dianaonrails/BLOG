<html>
<head>
    <title>BLOG</title>
    <link rel="stylesheet" href="../css/normalize.css" type="text/css">
    <link rel="stylesheet" href="../css/skeleton.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body>
	<div class="row">
		<div class="twelve columns">
			<div class="ten columns menu-header">
				
				<div class="menu-header__link"><a href="create_post.php">Adicionar Post</a></div>
				<div class="menu-header__link"><a href="/BLOG/">Inicio</a></div>
			</div>
			<div class="two columns menu-header">	
			
				<div class="menu-header__link"><a href="index.php?logout">Logout</a></div>
			</div>
		</div>	
	</div>
	<?php
		// load the login class
		require_once("../config/db.php"); 
		require_once("../classes/Posts.php");
		$posts = new Posts();

		$posts->getPost($_GET["ID"]);
		$row = $result->fetch_assoc();
	?>
	<div class="parallax" style="background-image:url('<?php  echo $row['post_photos']; ?>');">
		<div class="title"><?php echo $row['post_title']; ?></div>
	</div>	
	<div class="container">
		<div class="row">
			<div class="eight column">
				<div class="post-textarea"><?php echo $row['post_textarea']; ?></div>
			</div>	
		</div>	
	</div>	
</body>
</html>
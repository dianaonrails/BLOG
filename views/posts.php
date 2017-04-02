<html>
<head>
    <title>BLOG</title>
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/skeleton.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
</head>
<body>
<?php
		// load the login class
		require_once("classes/Posts.php");
		$posts = new Posts();

		$posts->getPosts();
?>	
<div class="posts">
	
	<div class="row">
		<div class="twelve columns menu-header">
			<div class="two columns">Blog Da Casa</div>
			<div class="seven columns">

				<div class="menu-header__link"><a href="../BLOG/views/create_post.php">Adicionar Post</a></div>
				<div class="menu-header__link"><a href="/BLOG/">Inicio</a></div>
			</div>
			<div class="three columns">	
				<div class="message">Bem-vindo, <?php echo $_SESSION['user_name']; ?>.</div>
				<div class="menu-header__link"><a href="index.php?logout">Logout</a></div>
			</div>
		</div>	
	</div>
	<div class="row">
			<div class="slider">
			  <div><div class="slider-img" style="background-image:url('images/slide1.jpg')">TITLE</div></div>
			  <div><div class="slider-img" style="background-image:url('images/login.jpg')"></div></div>
			</div>
			
		</div>	
	<div class="container">	
		
		
		<div class="row">	
			<div class="twelve columns posts-items">
				<h4 class="posts-items__title">See all Posts</h4>
				<?php

				while($row = $result->fetch_assoc()){
					$date = date_create($row['post_date']);
					echo "<div class='four columns post-item'>
						<div class='post-title'>". $row['post_title'] ."</div> <div class='post-date'> " . date_format($date, 'd-m-Y')  . "</div>".
						"<div class='link-item'><a href=views/view_post.php?ID=" . $row['ID'] . ">ver post ></a></div>" .
						"</div>";
					//echo '<a href=views/edit_post.php?ID=' . $row['ID'] . '>edit</a>';
					//echo '<a href=views/create_post.php>add post</a>';
				}

				?>
			</div>	
		</div>	
	</div>
</div>
</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
      $('.slider').slick({
      	autoplay: true,
      	arrows: false,
      }

      );
    });
 </script>
<!doctype HTML>
<html>
<head>
<title>Blog de test!</title>
<link type="text/css" rel="stylesheet" href="style.css" media="all">
</head>
<body>

	<?php
		/*ini_set('display_errors', 1);
		error_reporting(E_ALL);*/
	
		require_once(__DIR__.'/models/Post.php');
	
		$ins = new Post();
		$posts = $ins->get_posts();
	?>
	
	<h1>Blog</h1>

	<?php foreach($posts as $row) {?>
		<div class="articulo">
			<h2><?=$row['title']?></h2>
			<p><?=$row['content']?></p>
			<a href="editPost.php?id=<?=$row['id']?>">Editar</a> - <a href="listeners/DeletePost.php?id=<?=$row['id']?>">X Eliminar</a>
		</div>
	<?php }?>
	


	<div id="footPanel">
		<a class="button" href="newPost.html">+ entrada</a>
	</div>
	
</body>
</html>
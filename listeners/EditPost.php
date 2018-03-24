<!doctype HTML>
<html>
<head>
	<title>Blog de test!</title>
	<link type="text/css" rel="stylesheet" href="/style.css" media="all">
</head>
<body>

	<span>post con id - <?=$_POST['id']?></span><br />

	<?php
		/*ini_set('display_errors', 1);
		error_reporting(E_ALL);*/
	
		require_once('../models/Post.php');

		$ins = new Post();
		$ins->update_post( $_POST['id'] , $_POST['title'] , $_POST['content'] );
	?>

	<br />
	
	<span>Editado correctamente</span>
	<br />
	<a class="button" href="/"><< al blog</a>

</body>
</html>

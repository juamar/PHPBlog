<!doctype HTML>
<html>
<head>
	<title>Blog de test!</title>
	<link type="text/css" rel="stylesheet" href="/style.css" media="all">
</head>
<body>

	<span>post con id - <?=$_GET['id']?></span><br />

	<?php
		/*ini_set('display_errors', 1);
		error_reporting(E_ALL);*/
	
		require_once('../models/Post.php');

		$ins = new Post();
		$ins->delete_post( $_GET['id'] );
	?>

	<br />
	
	<span>borrado correctamente</span>
	<br />
	<a class="button" href="/"><< al blog</a>

</body>
</html>

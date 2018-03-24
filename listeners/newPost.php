<!doctype HTML>
<html>
<head>
	<title>Blog de test!</title>
	<link type="text/css" rel="stylesheet" href="/style.css" media="all">
</head>
<body>

	<?php
		/*ini_set('display_errors', 1);
		error_reporting(E_ALL);*/
	
		require_once('../models/Post.php');

		$ins = new Post();
		$ins->save_post( $_POST['title'] , $_POST['content'] );
	?>

	<span>title - <?=$_POST['title']?></span><br />
	<span>content - <?=$_POST['content']?></span>
	<br />
	
	<span>Subido correctamente</span>
	<br />
	<a class="button" href="/">Ver en el blog >></a>

</body>
</html>

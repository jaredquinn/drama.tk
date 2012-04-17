<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
	<title>Drama.tk</title>
	<link rel="stylesheet" type="text/css" href="/style.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>
<?
	$str = $_REQUEST['str'] ? $_REQUEST['str'] : "";
	if(!empty($str)) {
		$bClass = "go";
	} else {
		$bClass = "entertext";
	}

?>
<body class="<?= $bClass ?>">
<?
	if(!empty($str)) {
		require "dramatk.php";
	} else {
		require "input.php";
	}
?>
</body>
</html>

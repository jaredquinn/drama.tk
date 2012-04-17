<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<?
	$str = $_REQUEST['str'] ? $_REQUEST['str'] : "";
	if(!empty($str)) {
		$bClass = "go";
	} else {
		$bClass = "entertext";
	}

?>
<head>
	<title>Drama.tk</title>
	<link rel="stylesheet" type="text/css" href="/style.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript">

	var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-30953361-1']); _gaq.push(['_trackPageview']);
    (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); })();

<? if(!empty($str)) {  ?>
		_gaq.push(['_trackEvent', 'Dramatify', 'Text', '<?= urlencode($str) ?>']);
<? } else { ?>
		_gaq.push(['_trackEvent', 'Frontpage', '', '']);
<? } ?>
  </script>
</head>
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

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
<?
	$str = isset($_REQUEST['str']) ? $_REQUEST['str'] : "";
	if(!empty($str)) { 
		$bClass = "go"; 
		$page = "dramatk.php"; 
		$view = "/render";
		$details = array( "Dramatify", "Text", urlencode($str) );
	} else { 
		$bClass = "entertext"; 
		$page = "input.php"; 
		$view = "/home";
		$details = array( "Dramatify", "Home", "Input" );
	}
?>
	<title>Drama.tk</title>
    <link href='http://fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/style.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30953361-1']);
  _gaq.push(['_setDomainName', 'drama.tk']);
  _gaq.push(['_trackPageview', '<?= $view ?>']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body class="<?= $bClass ?>">
<?  require $page; ?>
</body>
<script type="text/javascript">
_gaq.push(['_trackEvent', '<?= $details[0] ?>', '<?= $details[1] ?>', '<?= $details[2] ?>']); 
</script>
</html>

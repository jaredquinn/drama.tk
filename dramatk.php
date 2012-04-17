<pre>
<div class="background">
<span style="height: 500px;"></span>
</div>
</pre>
<?  echo '<div class="dramatic"><p class="blink">' . $_REQUEST['str'] . '</p></div>'; ?>
<script type="text/javascript">

jQuery.fn.center = function () { this.css("position","absolute");
	 this.css("top", (($(window).height() - this.outerHeight()) / 2) + $(window).scrollTop() + "px");
	 this.css("left", (($(window).width() - this.outerWidth()) / 2) + $(window).scrollLeft() + "px");
	 return this; }

	stufftodump = [];
<?
$f = file('randomtext' . rand(1, 3) . '.txt');
foreach ($f as $line) {
	$line = str_replace("'", "\"", $line);
	$line = str_replace(array("\n"), "", $line);
	echo "stufftodump.push('" . $line . "');\n"; 
}
?>
	
	function makePopupGo() {
		$('.dramatic').center();
		$('.dramatic').css({ height: $('.dramatic').height() + 'px', display: 'block' });
		setInterval(toggleBlinks, 300); 
	}

	function toggleBlinks() {
			$('.blink').toggle();
	}

	var c = 0;
	var times = 0;
	function addAnotherLine() {
			$('.background').append( '<span>' + stufftodump[c] + '<br/></span>');
			if (c > stufftodump.length) c = 0;
			if (times > 200) $('.background').find('span:first').remove();
			var scroll = $(".background").prop("scrollHeight") - $('.background').height()
			$(".background").scrollTop(scroll)
			c++; times++;
	}


	$(document).ready(function() {
		$('.background').css({ height: $(window).height() });
		setInterval(addAnotherLine, 10);		
		setTimeout(makePopupGo, <?= rand(3500, 8000) ?>);
	});
</script>

</body>

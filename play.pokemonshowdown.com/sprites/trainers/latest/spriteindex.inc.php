<?php
function showSpriteStyle() {
?>
<meta charset="utf-8" />
<style type="text/css">
html {
  background: #EEE;
  font: 12pt Verdana, sans-serif;
}
h1, h2, p {
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
}
figure {
	width: 96px;
	display: inline-block;
	vertical-align: top;
	text-align: center;
	margin: 0.5em 10px;
	overflow-wrap: break-word;
}
figure figcaption {
	font-size: 12px;
	text-align: center;
}
a {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
</style>
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-26211653-1']);
	_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
	_gaq.push(['_setAllowLinker', true]);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
<?php
}
function showSpriteIndex($path) {
?>
<?php
$files = glob($path);
foreach ($files as &$i) {
	$i = htmlentities($i);
	$j = explode("!", $i);
?>
<figure id="<?php echo $j[1] ?>">
<img src="https://play.pokemonshowdown.com/sprites/trainers/<?php echo $j[1] ?>" alt="<?php echo $j[1] ?>" title="<?php echo $j[1] ?>" />
<figcaption><a href="https://play.pokemonshowdown.com/sprites/trainers/<?php echo $j[1] ?>"><?php echo substr($j[1], 0, -4) ?></a><br />by <?php echo $j[0] ?></figcaption>
</figure>
<?php
}
?>
<?php
}
?>

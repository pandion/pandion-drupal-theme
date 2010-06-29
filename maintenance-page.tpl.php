<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title><?php print $head_title; ?></title>
<link rel="Shortcut Icon" type="image/x-icon" href="<?php print base_path() . path_to_theme() . '/' ?>images/favicon.ico"/>
</head>
<body>

<p>
<?php
	print $help;
	print $messages;
	print $content;
?>
</p>

<p>Menu</p>
<ul>
	<li><a href="/pandion_setup.msi">Download</a></li>
	<li><a href="http://www.flickr.com/photos/cbaspandion">Screenshots</a></li>
	<li><a href="http://getsatisfaction.com/pandion">Support Forum</a></li>
	<li><a href="http://pandion.pbworks.com/">Documentation</a></li>
	<li><a href="http://blog.pandion.im/">Blog</a></li>
</ul>

<p>Copyright &copy; 2010 Sebastiaan Deckers</p>

<script type="text/javascript">var _gaq=[["_setAccount","UA-4825977-2"],["_trackPageview"]]</script>
<script type="text/javascript" src="http://www.google-analytics.com/ga.js"></script>

</body>
</html>

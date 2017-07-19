<?php
if (preg_match('/Kodi/',$_SERVER['HTTP_USER_AGENT'])) {
$dir = scandir(getcwd());
$index = '
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
 <head>
  <title>Demonstratorz Index Maker</title>
 </head>
 <body>
<h1>Demonstratorz Index Maker</h1>
<ul>';
foreach ($dir as $key => $value) {
	if (preg_match('/.zip/',$value)){
		$index .='
		<li><a href="/';
		if (is_dir($value)) {
			$index .=rawurlencode($value).'/';
		} else {
			$index .=rawurlencode($value);
		}
		$index .='"> ';
		$index .=$value;
		$index .='</a></li>';
		}
	}
$index .='
</ul>
</body></html>';

echo $index;
}
?>
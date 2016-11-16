<?php
$dir = '.';
$files = scandir($dir);
foreach($files as $file) 
{
	if (is_file($file) and $file != 'index.php' and $file != 'favicon.png' and $file != 'favicon.ico') echo '<a href="'.$file.'">'.$file.'</a><br />';
}
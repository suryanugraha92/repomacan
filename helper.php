<?php

function getFile($filename = '')
{
	// get contents of a file into a string
	$filename = "/pkgs/ubuntu-debmirror/crons";
	$handle = fopen($filename, "r");
	$contents = fread($handle, filesize($filename));
	fclose($handle);

	echo $contents;
}

?>
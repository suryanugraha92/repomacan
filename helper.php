<?php

function getFile($filename = '')
{
	// get contents of a file into a string
	$handle = fopen($filename, "r");
	$contents = fread($handle, filesize($filename));
	fclose($handle);

	return $contents;
}

function getCron()
{

	$result = array();
	$result['minute'] = $pecah[0];
	$result['hour'] = $pecah[1];
	$result['day'] = $pecah[2];
	$result['month'] = $pecah[3];
	$result['week'] = $pecah[4];

	return $result;
}
	$cron = getFile("/sedot/pkgs/ubuntu-debmirror/cron");
	$pecah = explode(" ", $cron);

function getListDay($selected = '')
{
	$list = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "*" => "Setiap hari");
	$result = '';

	foreach ($list as $value => $text):
		if ($value==$selected)
			$result .= '<option value="'.$value.'" selected>'.$text.'</option>';
		else
			$result .= '<option value="'.$value.'">'.$text.'</option>';
	endforeach;

	return $result;
}

function writeCron($hour, $week)
{
	$fp = fopen('/sedot/pkgs/ubuntu-debmirror/cron', 'w');

	$data = '0 '.$hour.' * * '.$week;
	fwrite($fp, $data);
	fclose($fp);
}

function getRelease()
{
	$release = getFile("/sedot/pkgs/ubuntu-debmirror/debmirror.dist");
	
	return $realease;
}

?>

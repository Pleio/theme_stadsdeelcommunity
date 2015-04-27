<?php

	global $CONFIG;

	$etag = (int) $CONFIG->lastcache;
	
	if (isset($_SERVER['HTTP_IF_NONE_MATCH']) && trim($_SERVER['HTTP_IF_NONE_MATCH']) == "\"$etag\"") {
		header("HTTP/1.1 304 Not Modified");
		exit;
	}
	
	if($contents = file_get_contents($CONFIG->dataroot . "theme_stadsdeelcommunity/template_files/site_" . $CONFIG->site_guid))	{
		header("Content-type: image/jpeg");
		header('Expires: ' . date('r', time() + 864000));
		header("Pragma: public");
		header("Cache-Control: public");
		header("ETag: \"$etag\"");
		header("Content-Length: " . strlen($contents));
	
		$splitString = str_split($contents, 1024);
		foreach($splitString as $chunk)	{
			echo $chunk;
		}
	}
	
	die();
<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'http://203.151.136.136:90';
		header('Location: '.$uri.'/justcar/');
	} else {
		$uri = 'http://203.151.136.136:90';
		header('Location: '.$uri.'/justcar/');
	}
	// $uri .= $_SERVER['HTTP_HOST'];
	
	exit;
?>
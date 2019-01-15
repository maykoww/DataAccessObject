<?php

spl_autoload_register(function($className){

	$filename = "class" . DIRECTORY_SEPARATOR . $className . ".php";

	if (file_exists($filename)) {
		require_once($filename);
	}

});

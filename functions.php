<?php

	// files to load into functions.php
	$bonsai_includes = array(

		'lib/init.php',				// initial theme setup
		'lib/assets.php',			// scripts and styles
		'lib/admin.php' 			// admin functions

	);

	// go through each file and require it
	foreach ( $bonsai_includes as $file ) {

		// file not found, output an error
		if (!$filepath = locate_template($file)) {

			trigger_error(sprintf(__('Error locating %s for inclusion', 'bonsai'), $file), E_USER_ERROR);
		}

		// include the file
		require_once $filepath;

	}

	unset($file, $filepath);

?>

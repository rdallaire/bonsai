<?php

	$bonsai_includes = array(

		'lib/admin.php'			// admin functions

	);

	foreach ( $bonsai_includes as $file ) {

		if (!$filepath = locate_template($file)) {

			trigger_error(sprintf(__('Error locating %s for inclusion', 'bonsai'), $file), E_USER_ERROR);
		}

		require_once $filepath;

	}

	unset($file, $filepath);

?>

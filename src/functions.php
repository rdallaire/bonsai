<?php

/*
			___  ____ _  _ ____ ____ _
			|__] |  | |\ | [__  |__| |
			|__] |__| | \| ___] |  | |

			by Ross Dallaire @rdallaire

		         ,.,
		        MMMM_    ,..,
		          "_ "__"MMMMM          ,...,,
		   ,..., __." --"    ,.,     _-"MMMMMMM
		  MMMMMM"___ "_._   MMM"_."" _ """"""
		   """""    "" , \_.   "_. ."
		          ,., _"__ \__./ ."
		         MMMMM_"  "_    ./
		          ''''      (    )
		   ._______________.-'____"---._.
		    \                          /
		     \________________________/
		     (_)                    (_)

*/

	// files to load into functions.php
	$bonsai_includes = array(

		'lib/init.php',				// initial theme setup
		'lib/cleanup.php',			// initial theme setup
		'lib/assets.php',			// scripts and styles
		'lib/admin.php', 			// admin functions
		'lib/sidebars.php', 		// admin functions
		'lib/extras.php' 			// extra functions

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

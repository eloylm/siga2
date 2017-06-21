<?php
	// Include prepend.inc to load QCubed
	require('includes/prepend.inc.php');	/* if you DO NOT have "includes/" in your include_path */
	// require('prepend.inc.php');				/* if you DO have "includes/" in your include_path */
	QApplication::Redirect('htdocs/login.php');
	?>


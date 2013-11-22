<?php 

function shutdown()
{
	print_r(error_get_last());
}

/**
 * Intercept any fatal error that might occur.
 */
register_shutdown_function('shutdown');

foo();
<?php

/**
 * Set active page
 *
 * @param string $uri
 * @return string
 */
function set_active($uri)
{
    return Request::is($uri) ? 'active' : '';
}

function set_status($status)
{
	$statuses = [
	    1 => 'Pending', 
	    2 => 'In Progress', 
	    3 => 'Closed',
	    4 => 'Awaiting Customer reply',
	    5 => 'Awaiting Support Agent reply'
	];

	return $statuses[$status];
}

function get_statuses()
{
	$statuses = [
	    1 => 'Pending', 
	    2 => 'In Progress', 
	    3 => 'Closed',
	    4 => 'Awaiting Customer reply',
	    5 => 'Awaiting Support Agent reply'
	];

	return $statuses;
}

?>
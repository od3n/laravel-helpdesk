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

?>
<?php

/**
 * @package WPSH
 */

defined('ABSPATH') or die();

/**
 * wpForo Compability
 *
 * wpForo Compability Class
 *
 * @since 2.1.0
 */
class WPSH_Wpforo extends WPSH_Core

{

    function __construct()
    {

        if (!parent::option('activate-wpforo', true, true)) {
            return;
        }
    }
}

new WPSH_Wpforo();

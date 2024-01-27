<?php

/*
 * Plugin Name:       RankMath reset
 * Description:       Temporary plugin that enables RankMath data cleanup on Delete
 * Author:            <Lukas> lukas@ocelot.lt
 * Version:           1.0
 * Author URI:        https://ocelot.lt
 */

// https://rankmath.com/kb/uninstall/
add_filter( 'rank_math_clear_data_on_uninstall', '__return_true' );

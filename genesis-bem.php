<?php
/*
 * Plugin Name: Genesis BEM
 * Plugin URI: https://github.com/seothemes/genesis-bem
 * Description: Converts Genesis markup to BEM classes.
 * Author: SEO Themes
 * Author URI: https://seothemes.com/
 * Version: 0.1.0
 * Text Domain: genesis-bem
 * Domain Path: /languages
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

include_once __DIR__ . '/src/Filters.php';

$genesis_bem = new SeoThemes\GenesisBem\Filters();

$genesis_bem->init();

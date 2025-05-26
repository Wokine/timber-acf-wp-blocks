<?php
if ( ! defined( 'ABSPATH' ) ) {
    header('HTTP/1.0 404 Not Found');
    exit;
}
Timber_Acf_Wp_Blocks::timber_blocks_callback($block);

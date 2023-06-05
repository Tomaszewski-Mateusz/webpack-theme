<?php 

include ('include/scripts.php');
include ('include/stylesheets.php');
include ('include/menus.php');
include ('include/custom.php');

add_action('init', 'register_acf_blocks');
function register_acf_blocks()
{
	register_block_type(__DIR__ . '/template-parts/blocks/products');
}
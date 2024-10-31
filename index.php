<?php
/*
  Plugin Name: Newsletter - RSS Block
  Plugin URI: https://www.satollo.net/plugins/newsletter-rss-block
  Description: A RSS block for the Newsletter composer
  Version: 1.0.5
  Author: Stefano Lissa
  Author URI: https://www.satollo.net
  Disclaimer: Use at your own risk. No warranty expressed or implied is provided.
  Text Domain: newsletter-rss-block
  License: GPLv2 or later
  Requires PHP: 7.2
  Requires at least: 5.0.0
*/

// Please, register this action not limited to the admin side, since the block needs to be available even
// on frontend. 
// The action is fired only when Newsletter needs the blocks so there is no overhead.

add_action('newsletter_register_blocks', function () {
    // The registration function needs a folder where the block.php, the options.php the icon.png are located. 
    TNP_Composer::register_block(__DIR__ . '/rss');
});



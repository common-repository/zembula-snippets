<?php
   /*
   Plugin Name: Zembula Snippets
   Description: Easily add Zembula’s interactive experiences to your website or blog
   Version: 1.0.1
   Author: Ian Dusenbury
   Author URI: https://github.com/Scratch-it
   License: GPL2
   */

    function zmbl_header_hook() {
      add_action( 'wp_enqueue_scripts', 'zmbl_header_style' );
    }

    add_action( 'get_header', 'zmbl_header_hook' );

    function zmbl_header_style() {
      wp_enqueue_style( 'zmbl-common', 'https://www.zmbl.co/build/common.css?v=1.0.3');
      wp_enqueue_style( 'zmbl-popover', 'https://www.zmbl.co/build/popover.css?v=1.0.3');
      wp_enqueue_style( 'zmbl-embed', 'https://www.zmbl.co/build/embed.css?v=1.0.3');
      wp_enqueue_style( 'zmbl-slidein', 'https://www.zmbl.co/build/slidein.css?v=1.0.3');

      wp_enqueue_script( 'zmbl-common', 'https://www.zmbl.co/build/common.js?v=1.0.3' );
      wp_enqueue_script( 'zmbl-embed', 'https://www.zmbl.co/build/embed.js?v=1.0.3' );
      wp_enqueue_script( 'zmbl-popover', 'https://www.zmbl.co/build/popover.js?v=1.0.3' );
      wp_enqueue_script( 'zmbl-slidein', 'https://www.zmbl.co/build/slidein.js?v=1.0.3' );
    }
?>

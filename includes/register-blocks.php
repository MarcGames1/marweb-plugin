<?php
function MW_register_blocks() {
    

    $blocks = [
        ['name' =>"marweb-logo"],
    ];


   foreach($blocks as $block) {
    register_block_type(
      MW_PLUGIN_DIR . 'build/blocks/' . $block['name'], 
     isSet($block['options']) ? $block['options'] : []
    );
  }
}
<?php
function MW_Activate_Plugin() {
    if(version_compare(get_bloginfo( 'version'),'5.9', '<' )){
        wp_die(__("You must update Wordpress to use this plugin", "mw-cpt"));
    }
    MW_portfolio_post_type();
    flush_rewrite_rules();
}
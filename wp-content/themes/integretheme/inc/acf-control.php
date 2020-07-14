<?php
if (!function_exists('get_field') ) {
    add_action('admin_notices', 'warning_admin_acf');
    function warning_admin_acf() {
    $acf_plugin_url = get_bloginfo('url')."/wp-admin/plugin-install.php?s=acf&tab=search&type=term";?>
    <div id="my-custom-warning" class="error fade">
    <p><strong>Attention</strong>, ce site a besoin d'<a href="<?php echo $acf_plugin_url;?>">ACF</a></p>
        </div>
     <?php // echo $output;
    }

    
//Notice in front
add_action('template_redirect', 'warning_front_acf');
    function warning_front_acf() {
        wp_die('Désolé, site en maintenance');
    }
}
?>







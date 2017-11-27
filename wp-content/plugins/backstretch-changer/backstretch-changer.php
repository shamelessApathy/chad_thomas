<?php
   /*
   Plugin Name: Backstretch Changer
   Plugin URI: none
   Description: a plugin to chnage backstretch images
   Version: 1.0
   Author: Brian Moniz
   Author URI: http://slcutahdesign.com
   License: GPL2
   */
add_action('admin_menu', 'backstretch_changer_create_menu');

function backstretch_changer_create_menu() {

	//create new top-level menu
	add_menu_page('Backstretch-Changer Settings', 'Image Settings', 'administrator', __FILE__, 'backstretch_changer_settings_page' , plugins_url('/images/logo.png', __FILE__) );

	//call register settings function
	add_action( 'admin_init', 'register_backstretch_changer_plugin_settings' );

function register_backstretch_changer_plugin_settings() 
{
	//register our settings
	register_setting( 'backstretch-changer-settings-group', 'first_image' );
	register_setting( 'backstretch-changer-settings-group', 'second_image' );
  register_setting( 'backstretch-changer-settings-group', 'third_image' );
  register_setting( 'backstretch-changer-settings-group', 'fourth_image' );
	register_setting( 'backstretch-changer-settings-group', 'fifth_image' );
}

function backstretch_changer_settings_page() {
?>
<div class="wrap">
<h1>Backstretch-Changer</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'backstretch-changer-settings-group' ); ?>
    <?php do_settings_sections( 'backstretch-changer-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">First Image</th>
        <td><input type="text" name="First-Image" value="<?php echo esc_attr( get_option('First-Image') ); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Second Image</th>
        <td><input type="text" name="Second-Image" value="<?php echo esc_attr( get_option('Second-Image') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Thrid Image</th>
        <td><input type="text" name="Third-Image" value="<?php echo esc_attr( get_option('Third-Image') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Fourth Image</th>
        <td><input type="text" name="Fourth-Image" value="<?php echo esc_attr( get_option('Fourth-Image') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Fifth Image</th>
        <td><input type="text" name="Fifth-Image" value="<?php echo esc_attr( get_option('Fifth-Image') ); ?>" /></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php }
}
   
?>
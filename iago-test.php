<?php 

/*
    Plugin name: Iago Task for Raketech
    Description: A truly amazing plugin.
    Version: 1.0
    Author: Iago Augusto de Deus
    Author URI: http://iagoaugusto.xyz/
*/

//Creating a class here to avoid conflict in function names
class IagoRaketechPlugin {
    function __construct() {
        add_action('admin_menu', array($this, 'adminPage'));
    }

//basic settings for the adminBar right after the constructor
    function adminPage() {
        add_options_page('Iago Plugin Settings', 'Iago Plugin', 'manage_options', 'iago-plugin', array($this, 'ourHTML')); //
    }

//creating a function to config our Settings Page in HTML
    function ourHTML() { ?>
        <div class='wrap'>
            <h1>Iago's Plugin Settings</h1>
        </div>
    <?php } 
}

//If any other plugins need to remove one of our actions or filters they use this variable to look inside our class.
$IagoRaketechPlugin = new IagoRaketechPlugin();



?>

<?php
/**
* @package MouadhPlugin
*/
/*
Plugin Name: MouadhPlugin
plugin URI: https://github.com/MouadhAouitiDev
Description: this is my First plugin developped in 18-04-2020 23:43 
version: 1.0.0
Author: Mouadh Aouiti
Author URI: https://www.linkedin.com/in/mouadh-aouiti-928a57147/
Licence: GPLv2 or later
Text Domain: mouadh-plugin
*/
/*
This program is free softwre : 
*/
/*copyright: 2020-2021 sbeitla Tunisia 
*/

defined( 'ABSPATH' ) or die( 'you can\t acces to this file' );
 
 
class MouadhPlugin{

	//contructeur 
	function __construct(){
		add_action('init' ,array($this,'custom_post_type')); // create a new post 
		add_action('admin_enqueue_scripts',array($this,'enqueue'));// declaration of scripts files like css and js 


	}

	//visibilty methodes 
	//public we can acces in any where 
	//methode sans visibilty it is by defaut public 
	//protected can accesed within the class it self or an extension of the class  
	//private can accesed within the class it self or an extension of the class  
	 
	//static can be with all the type of function public or protected or private we can calling static methode or attribut with out instancier the class 


	 function custom_post_type(){
		 register_post_type('Book',['public'=> true,'label'=>'book']);


	 }

	 function enqueue(){

		 //enqueue all your scripts 
		 wp_enqueue_style('mypluginstyle',plugins_url('/assets/mystyle.css', __FILE__ ));
		 wp_enqueue_script('mypluginscript',plugins_url('/assets/myscript.js', __FILE__ ));

	 }
 }
 
 if ( class_exists( 'MouadhPlugin' )){
	
	 $MouadhPlugin = new MouadhPlugin();

 }
 
 //activation 
 require_once plugin_dir_path(__FILE__).'inc/mouadh-plugin-activate.php';
 register_activation_hook(__FILE__,array( 'MouadhPluginActivate', 'activate' )); 
 
 
 //desactivation 
 require_once plugin_dir_path(__FILE__).'inc/mouadh-plugin-deactivate.php';
  register_deactivation_hook(__FILE__,array('MouadhPluginDeactivate' , 'desactivate' ));
 
 //uninstall -->go to file unistall.php
?>
